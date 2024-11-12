<?php

namespace App\Providers;

use App\Events\AddEvent;
use App\Events\AddEventGoogleSheetEvent;
use App\Events\ContactEvent;
use App\Events\EventDetailSubscribeEvent;
use App\Events\GoogleSheetEvent;
use App\Events\NewsletterEvent;
use App\Events\SubscribeEvent;
use App\Events\TopicApiEvent;
use App\Listeners\AddEventGoogleSheetListener;
use App\Listeners\AddEventListener;
use App\Listeners\ContactListener;
use App\Listeners\EventDetailSubscribeListener;
use App\Listeners\GoogleSheetListner;
use App\Listeners\NewsletterListener;
use App\Listeners\SubscribeListener;
use App\Listeners\TopicApiListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        SubscribeEvent::class => [
            SubscribeListener::class,
        ],
        
        ContactEvent::class => [
            ContactListener::class,
        ],
        
        AddEvent::class => [
            AddEventListener::class,
        ],

        EventDetailSubscribeEvent::class => [
            EventDetailSubscribeListener::class,
        ],

        NewsletterEvent::class => [
            NewsletterListener::class,
        ],

        GoogleSheetEvent::class => [
            GoogleSheetListner::class,
        ],

        AddEventGoogleSheetEvent::class => [
            AddEventGoogleSheetListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
