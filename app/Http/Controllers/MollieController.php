<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Mollie\Laravel\Facades\Mollie;

class MollieController extends Controller
{

    private $mollie;


    public function  __construct()
    {
        $this->mollie = new \Mollie\Api\MollieApiClient();
        $this->mollie->setApiKey('test_SVB4a7dg3RvGtKmu4SeFm4sJrsW2sk'); // your mollie test api key
    }

    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function preparePayment()
    {


        $payment = $this->mollie->payments->create([
            'amount' => [
                'currency' => 'EUR', // Type of currency you want to send
                'value' => '10.00', // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description' => 'Payment By Airport Cab',
            'redirectUrl' => route('payment.success'), // after the payment completion where you to redirect
        ]);
        $payment_id = $payment->id;
        Cache::put("payment_id", $payment_id, now()->addMinutes(5));

        $payment = $this->mollie->payments->get($payment_id);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    /**
     * Page redirection after the successfull payment
     *
     * @return Response
     */
    public function paymentSuccess()
    {
        $payment = $this->mollie->payments->get(Cache::get("payment_id"));

        if ($payment->isPaid()) {
            dd("Payment received.");
        }
        dd("here");
    }
}
