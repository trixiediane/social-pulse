<?php

namespace App\Livewire\User\Components;

use App\Models\User;
use Livewire\Component;

class ViewUser extends Component
{
    public $user;
    public function mount($username)
    {
        $this->user = User::where('username', $username)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.user.components.view-user');
    }
}
