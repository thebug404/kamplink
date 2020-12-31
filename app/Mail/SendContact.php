<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContact extends Mailable {
    use Queueable, SerializesModels;

    public $payload;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($payload) {
        $this->payload = $payload;
        $this->subject = $payload["subject"];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this
        ->from($this->payload["email"])
        ->view('mails.send-contact');
    }
}
