<?php

namespace App\Mail;

use App\Models\OutsideEvent;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AddEventMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $addEvent;
    public $isAdmin;

    public function __construct(OutsideEvent $addEvent, $isAdmin = false)
    {
        $this->addEvent = $addEvent;
        $this->isAdmin = $isAdmin;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Add Event Mail',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: $this->isAdmin ? 'emails.add-event' : 'emails.add-event-replay',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
