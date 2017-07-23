<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Log;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    private $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $contact )
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this
        ->from('di-challenge@example.com')
        ->view('emails.contact')
        ->text('emails.contact-text')
        ->with([
          'name' => $this->contact['name'],
          'email' => $this->contact['email'],
          'telephone' => $this->contact['telephone'],
          'contactMessage'   => $this->contact['message'],
        ]);
    }
}
