<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
{
    public $url;

    public function __construct($verificationToken)
    {
        $this->url = route('verify.email', $verificationToken);
    }

    public function build()
    {
        return $this->markdown('emails.verify');
    }
}
