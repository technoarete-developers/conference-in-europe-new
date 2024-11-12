<?php

namespace App\Listeners;

use App\Events\EventDetailSubscribeEvent;
use App\Mail\EventDetailSubscribeMailable;
use Illuminate\Support\Facades\Mail;

class EventDetailSubscribeListener
{

    public function handle(EventDetailSubscribeEvent $event): void
    {

        $eventSubscribe = $event->eventSubscribe;

        Mail::to(config('mail.from.address'))->send(new EventDetailSubscribeMailable($eventSubscribe, true));

        Mail::to($eventSubscribe['email'])->send(new EventDetailSubscribeMailable($eventSubscribe));
    }
}
