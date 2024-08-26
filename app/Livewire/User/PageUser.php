<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class PageUser extends Component
{
    public $user;
    public function mount($username)
    {
        $this->user = User::where('username', $username)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.user.page-user');
    }
}
