<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InquirySubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $inquiry) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [
                new Address($this->inquiry['email'], $this->inquiry['name']),
            ],
            subject: 'New Eastern Geotechnics Website Inquiry',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.inquiries.submitted',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
