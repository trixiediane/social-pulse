<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $recipientId;

    /**
     * Create a new event instance.
     *
     * @param string $message
     * @param int $recipientId
     */
    public function __construct($message, $recipientId)
    {
        $this->message = $message;
        $this->recipientId = $recipientId;
    }

    public function broadcastOn(): Channel
    {
        // Private channel for the recipient
        return new Channel('user.' . $this->recipientId);
    }

    public function broadcastWith()
    {
        return [
            'message' => $this->message
        ];
    }

    public function broadcastAs(): string
    {
        return 'message-sent';
    }
}
