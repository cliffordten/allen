<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Signup extends Mailable
{
    use Queueable, SerializesModels;

    public $fullName;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullName, $email)
    {
        //
        $this->fullName = $fullName;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Verify Account')->view('mails.verify');
    }
}
