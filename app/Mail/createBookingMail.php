<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class createBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $request;
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $str = $this->request->phoneNumber;
        if ($str[0] == "0") {
            $str = ltrim($str, $str[0]);
        }
        $this->request->phone = $this->request->phoneCode . $str;
        return $this->view('createEmail')->with(['request' => $this->request]);
    }
}