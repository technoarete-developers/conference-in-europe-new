<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\IndexSubscription;

class SubscribeEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $subscription;

    public function __construct(IndexSubscription $subscription)
    {
         $this->subscription = $subscription;
       
    }


    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
