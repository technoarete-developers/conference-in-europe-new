<?php

namespace App\Events;

use App\Models\OutsideEvent;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AddEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $addEvent;

    public function __construct(OutsideEvent $addEvent)
    {
        $this->addEvent = $addEvent;
    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
