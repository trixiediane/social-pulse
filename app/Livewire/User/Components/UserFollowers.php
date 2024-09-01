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
    public $searchFollower;
    public $searchFollowing;

    public function mount($userId)
    {
        $this->user = User::where('id', $userId)->firstOrFail();
    }

    public function render()
    {
        $followers = $this->user->followers()
            ->orderBy('id', 'DESC')
            ->search(['username'], $this->searchFollower)
            ->paginate(10);

        $following = $this->user->following()
            ->orderBy('id', 'DESC')
            ->search(['username'], $this->searchFollowing)
            ->paginate(10);

        return view('livewire.user.components.user-followers', [
            'followers' => $followers,
            'following' => $following,
        ]);
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }
}
