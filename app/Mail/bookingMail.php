<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class bookingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function build()
    {
        return $this->from('saipravakhilar88@gmail.com', 'sai')
                    ->view('fronted.bookemail') // Assuming the view name is 'emails.booking'
                    ->subject('Booking Mail');
    }
}
