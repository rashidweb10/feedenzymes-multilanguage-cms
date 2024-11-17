<?php

namespace App\Jobs;

use App\Mail\EnquiryMail; // Ensure you have this Mailable class
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEnquiryEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $enquiry;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($enquiry)
    {
        $this->enquiry = $enquiry;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Send the email
        Mail::to($this->enquiry->email)->send(new EnquiryMail($this->enquiry));
    }
}