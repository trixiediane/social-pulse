<?php

namespace App\Livewire;

use App\Events\MessageSent;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public $users;

    public function mount()
    {
        // Fetch or pass the list of users
        $this->users = User::all();
    }

    public function sendMessage($recipientId, $message)
    {
        // Handle the sending message logic here
        // Broadcast the message to the private channel
        broadcast(new MessageSent($message, $recipientId));
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
