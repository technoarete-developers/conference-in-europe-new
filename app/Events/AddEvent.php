<?php

namespace App\Events;

use App\Models\OutsideEvent;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
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
