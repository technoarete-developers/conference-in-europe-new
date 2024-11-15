<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewsletterEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

   
    public $newsletter;

    public function __construct($newsletter)
    {
        $this->newsletter = $newsletter;
    
    }


    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
