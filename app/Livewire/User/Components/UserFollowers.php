<?php

namespace App\Livewire\User\Components;

use App\Models\User;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class UserFollowers extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $user;

    public function mount($userId)
    {
        $this->user = User::where('id', $userId)->firstOrFail();
    }

    public function render()
    {
        $followers = $this->user->followers()->paginate(10); // Adjust pagination size as needed
        $following = $this->user->following()->paginate(10); // Adjust pagination size as needed

        return view('livewire.user.components.user-followers', [
            'followers' => $followers,
            'following' => $following,
        ]);
    }
}
