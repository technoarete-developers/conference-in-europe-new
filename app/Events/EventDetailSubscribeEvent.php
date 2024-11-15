<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EventDetailSubscribeEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $eventSubscribe;

    public function __construct($eventSubscribe)
    {
        $this->eventSubscribe = $eventSubscribe;
    
    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
