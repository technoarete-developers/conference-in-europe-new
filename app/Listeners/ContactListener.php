<?php

namespace App\Listeners;

use App\Events\ContactEvent;
use App\Mail\ContactMailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ContactListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ContactEvent $event): void
    {
        $index = $event->index;
        // dd($event->Index);

        Mail::to(config('mail.from.address'))->send(new ContactMailable($index, true));

        Mail::to($index->email)->send(new ContactMailable($index));
    }
}
