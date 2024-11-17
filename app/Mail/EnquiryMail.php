<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $enquiry;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($enquiry)
    {
        $this->enquiry = $enquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('frontend.emails.enquiry')
                    ->with(['enquiry' => $this->enquiry]);
    }
}