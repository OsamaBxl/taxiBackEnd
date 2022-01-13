<?php

namespace App\Http\Controllers\booking;

use App\Enums\PaymentStatus;
use App\Enums\RefundStatus;
use App\model\Booking;
use App\model\Destinations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\booking\CreateBooking;
use App\traits\ApiResponse;

use App\Mail\createBookingMail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class BookingController extends Controller
{
    use ApiResponse;

    private $mollie;


    public function  __construct()
    {
        $this->mollie = new \Mollie\Api\MollieApiClient();
        $this->mollie->setApiKey('live_J9A37kw7rwq2EEFQVaA6q8heFQnzQd'); // your mollie test api key
    }

    public function createBooking(CreateBooking $request)
    {
        $booking = Booking::create([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'phoneCode' => $request->phoneCode,
            'phoneNumber' => $request->phoneNumber,
            'from' => $request->from,
            'to' => $request->to,
            'suitecaseNum' => $request->suitecaseNum,
            'personsNum' => $request->personsNum,
            'choiceTaxi' => $request->choiceTaxi,
            'seigeEnfant' => $request->seigeEnfant,
            'vol' => $request->vol,
            'time' => $request->time,

            'estimation' => round($request->estimation),
            'additionalInfo' => $request->additionalInfo
        ]);

        return $this->preparePayment($booking);

        // if ($booking) {
        //     Mail::to("contact@airportcab.be")->send(new createBookingMail($request));
        //     $this->apiResponse("success", 'Booking created sucessfully', 201);
        // } else {
        //     $this->apiResponse("Failed", 'Kindly contact your adminstrator', 500);
        // }
    }

    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function preparePayment(Booking $booking)
    {
        $money = round($booking->estimation * 25 / 100);
        $payment = $this->mollie->payments->create([
            'amount' => [
                'currency' => 'EUR', // Type of currency you want to send
                'value' => number_format((float)$money, 2, '.', ''), // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description' => 'Payment By Airport Cab',
            'redirectUrl' => route('payment.success', ["booking_id" => $booking->id]), // after the payment completion where you to redirect
        ]);
        $payment_id = $payment->id;
        DB::table("booking_transactions")->insert([
            "booking_id" => $booking->id,
            "payment_id" => $payment_id
        ]);

        $payment = $this->mollie->payments->get($payment_id);

        // redirect customer to Mollie checkout page
        return response()->json(["url" => $payment->getCheckoutUrl()]);
    }

    /**
     * Page redirection after the successfull payment
     *
     * @return Response
     */
    public function paymentSuccess($booking_id, Request $request)
    {
        $transaction = DB::table("booking_transactions")->whereBookingId($booking_id)->first();
        $payment = $this->mollie->payments->get($transaction->payment_id);
        if ($payment->isPaid()) {
            $booking =  Booking::find($booking_id);
            $booking->paid = round($booking->estimation * 25 / 100);
            $booking->reste = $booking->estimation - $booking->paid;
            $booking->save();
            DB::table("booking_transactions")->whereBookingId($booking_id)->update(["payment_status" => PaymentStatus::SUCCESSFUL]);

            Mail::to("contact@airportcab.be")->send(new createBookingMail($booking_id));
            $message = "Payment has been successfully processed";
            $link_refund = URL::signedRoute("booking.refund", ["booking_id" => Crypt::encrypt($booking_id)], now()->addMinutes(5));
            return view("paymentConfirm", compact("message", "link_refund"));
        } else {
            DB::table("booking_transactions")->whereBookingId($booking_id)->update(["payment_status" => PaymentStatus::FAILED]);
            $this->apiResponse("Failed", 'Kindly contact your adminstrator', 500);
            $message = "Payment has been successfully failed,kindly contact your adminstrator";
            return view("paymentConfirm", compact("message"));
        }
    }

    public function refund(string $booking_id)
    {
        try {
            $booking_id = Crypt::decrypt($booking_id);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            abort(403);
        }
        $transaction = DB::table("booking_transactions")
            ->whereBookingId($booking_id)
            ->wherePaymentStatus(PaymentStatus::SUCCESSFUL)
            ->whereRefundStatus(RefundStatus::INIT)
            ->first();
        if (!$transaction) {
            abort(400);
        }
        $payment = $this->mollie->payments->get($transaction->payment_id);
        if ($payment->isPaid()) {
            $booking =  Booking::find($booking_id);
            $refund = $payment->refund([
                "amount" => [
                    "currency" => "EUR",
                    "value" => number_format((float)$booking->paid, 2, '.', '')
                ]
            ]);
            switch ($refund->status) {
                case "pending":
                    //TODO : update transactioin refund status
                    $message = "your request is pending, wait a minutes";
                    break;
                case "successful":
                    //TODO : update transactioin refund status

                    $message = "your request is successful";
                    break;
                case "failed":
                    //TODO : update transactioin refund status

                    $message = "your request is failed";
                    break;
                default:
                    //TODO : update transactioin refund status

                    $message = "your request is invalid";
                    break;
            }
            dd($message, $refund);
            //TODO: return view with message
        } else {
        }
    }

    public function getDestinations()
    {
        $destinations = Destinations::get(['id', 'city_name']);
        if ($destinations) {
            $this->apiResponse("success", 'Destinations Returned sucessfully', 201, $destinations);
        } else {
            $this->apiResponse("Failed", 'Kindly contact your adminstrator', 500);
        }
    }
}