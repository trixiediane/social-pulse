<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    /**
     * Create a new event instance.
     */
    public function __construct($message = null)
    {
        $this->message = $message;
    }

    public function broadcastOn(): Channel
    {
        return new Channel('channel-core');
    }

    public function broadcastWith()
    {
        if ($this->message !== null) {
            return [
                'message' => $this->message
            ];
        }
    }

    public function broadcastAs(): string
    {
        return 'event-message-received';
    }
}
