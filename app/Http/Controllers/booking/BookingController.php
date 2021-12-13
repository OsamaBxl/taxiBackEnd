<?php

namespace App\Http\Controllers\booking;

use App\model\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\booking\CreateBooking;
use App\Traits\ApiResponse;

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
            'pickUp' => $request->pickUp,
            'otherAddressPick' => $request->otherAddressPick,
            'dropOff' => $request->dropOff,
            'otherAddressDrop' => $request->otherAddressDrop,
            'suitecaseNum' => $request->suitecaseNum,
            'personsNum' => $request->personsNum,
            'choiceTaxi' => $request->choiceTaxi,
            'time' => $request->time,
            'payment' => $request->payment,
            'estimation' => $request->estimation,
            'additionalInfo' => $request->additionalInfo
        ]);

        if ($booking) {
            Mail::to("osama.abdelgayed@gmail.com")->send(new createBookingMail($request));
            $this->apiResponse("success", 'Booking created sucessfully', 201);
        } else {
            $this->apiResponse("Failed", 'Kindly contact your adminstrator', 500);
        }
    }
}
