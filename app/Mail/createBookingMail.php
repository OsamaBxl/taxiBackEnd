<?php

namespace App\Mail;

use App\model\Booking;
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
    private $booking;
    public function __construct($id)
    {

        $this->booking = Booking::find($id);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $str = $this->booking->phoneNumber;
        if ($str[0] == "0") {
            $str = ltrim($str, $str[0]);
        }
        $this->booking->phone = $this->booking->phoneCode . $str;
        return $this->view('createEmail')->with(['request' => $this->booking]);
    }
}
