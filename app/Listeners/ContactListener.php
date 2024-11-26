<?php

namespace App\Listeners;

use App\Events\ContactEvent;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactListener
{
   
    public function handle(ContactEvent $event): void
    {
        $index = $event->index;

        Mail::to(config('mail.from.address'))->send(new ContactMailable($index, true));

        Mail::to($index->email)->send(new ContactMailable($index));
    }
}
