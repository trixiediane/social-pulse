<?php

namespace App\Livewire\User\Components;

use App\Models\User;
use Livewire\Component;

class ViewUser extends Component
{
    public $user;
    public function mount($userId)
    {
        $this->user = User::where('id', $userId)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.user.components.view-user');
    }
}
