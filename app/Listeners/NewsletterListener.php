<?php

namespace App\Listeners;

use App\Events\NewsletterEvent;
use App\Mail\NewsletterMailable;
use Illuminate\Support\Facades\Mail;

class NewsletterListener
{
    public function handle(NewsletterEvent $event): void
    {
        $newsletter = $event->newsletter;

        Mail::to(config('mail.from.address'))->send(new NewsletterMailable($newsletter, true));

        Mail::to($newsletter->email)->send(new NewsletterMailable($newsletter));
    }
}
