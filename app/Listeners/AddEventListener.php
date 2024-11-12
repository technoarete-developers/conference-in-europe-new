<?php

namespace App\Listeners;

use App\Events\AddEvent;
use App\Mail\AddEventMailable;
use Illuminate\Support\Facades\Mail;

class AddEventListener
{
    public function handle(AddEvent $event): void
    {
      $addEvent = $event->addEvent;

      Mail::to(config('mail.from.address'))->send(new AddEventMailable($addEvent, true));

      Mail::to($addEvent->contact_email)->send(new AddEventMailable($addEvent));
    }
}
