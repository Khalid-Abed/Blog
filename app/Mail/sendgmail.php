<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendgmail extends Mailable
{
    use Queueable, SerializesModels;

    public  $detail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($det)
    {
        $this->detail=$det;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mailcontent')->subject('Khaled Abed');
    }
}
