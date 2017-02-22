<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserCreated extends Mailable
{
    public $user;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'contact@trustukfundgroup.com';
        $name = 'Trustuk Fund';
        $subject = 'Trustuk Registration';

        return $this->view('emails.registered')
            ->from($address, $name)
            // ->cc($address, $name)
            // ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
    }
}
