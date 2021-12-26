<?php

namespace App\Http\Controllers\booking;

use App\model\Booking;
use App\model\Destinations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\booking\CreateBooking;
use App\traits\ApiResponse;

use App\Mail\createBookingMail;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    use ApiResponse;
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
            'payment' => $request->payment,
            'estimation' => $request->estimation,
            'additionalInfo' => $request->additionalInfo
        ]);

        if ($booking) {
            Mail::to("contact@airportcab.be")->send(new createBookingMail($request));
            $this->apiResponse("success", 'Booking created sucessfully', 201);
        } else {
            $this->apiResponse("Failed", 'Kindly contact your adminstrator', 500);
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