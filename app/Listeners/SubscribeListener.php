<?php

namespace App\Listeners;

use App\Events\SubscribeEvent;
use App\Mail\SubscribeMailable;
use Illuminate\Support\Facades\Mail;

class SubscribeListener
{
    public function handle(SubscribeEvent $event): void
    {
        $subscription = $event->subscription;

        Mail::to(config('mail.from.address'))->send(new SubscribeMailable($subscription, true));

        Mail::to($subscription->email)->send(new SubscribeMailable($subscription));
    }
}
