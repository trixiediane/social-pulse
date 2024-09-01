<?php

namespace App\Livewire\User\Components;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewUser extends Component
{
    public $user;
    public $isFollowing;

    public function mount($userId)
    {
        $this->user = User::findOrFail($userId);
        $this->isFollowing = Auth::check() ? Auth::user()->following->contains($this->user->id) : false;
    }

    public function toggleFollow()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user->following()->toggle($this->user->id);
            $this->isFollowing = !$this->isFollowing;
        }
    }

    public function render()
    {
        return view('livewire.user.components.view-user');
    }
}
