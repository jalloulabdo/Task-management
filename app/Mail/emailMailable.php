<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class emailMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $password;
    public $email;
    /**
     * Create a new message instance.
     */
    public function __construct($password,$email)
    {
        $this->password = $password;
        $this->email = $email;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Email Mailable',
         
        );
    }

    public function build()
    {
        return $this->markdown('email.index',[ 'email' => $this->email,'password' => $this->password])
               ->subject('Info Login');
    }
   

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
