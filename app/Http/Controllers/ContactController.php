<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Traits\ApiResponse;
use App\Http\Requests\booking\CreateMessage;

class ContactController extends Controller
{
    use ApiResponse;
    public function contact()
    {
        return view('contact-us');
    }

    public function sendEmail(CreateMessage $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Mail::to("osama.bruxelles@gmail.com")->send(new ContactMail($details));
        // return back()->with('message_sent', 'Your message has been sent Successfully');

        if ($details) {
            Mail::to("osama.bruxelles@gmail.com")->send(new ContactMail($details));
            $this->apiResponse("success", 'Your message has been sent Successfully', 200);
        } else {
            $this->apiResponse("Failed", 'Message was not sent', 500);
        }
    }
}