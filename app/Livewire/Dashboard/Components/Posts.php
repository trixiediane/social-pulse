<?php

namespace App\Livewire\Dashboard\Components;

use App\Models\Content;
use App\Models\User;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $search = '';
    public $showResults = false;

    public function render()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'User');
        })
            ->orderBy('id', 'DESC')
            ->search(['username'], $this->search)
            ->paginate(5);

        // Get the users the current authenticated user follows
        $followingUserIds = auth()->user()->following()->pluck('followed_id')->toArray();

        // Include the authenticated user's ID
        $followingUserIds[] = auth()->id();

        $query = Content::query()
            ->with('user')
            ->whereIn('user_id', $followingUserIds)  // Include content from followed users and the authenticated user
            ->where('status', 'APPROVED');  // Only show approved content

        $query->orderBy('updated_at', 'DESC');

        $contents = $query->paginate(3);

        return view(
            'livewire.dashboard.components.posts',
            [
                'contents' => $contents,
                'users' => $users,
                'showResults' => $this->showResults
            ]
        );
    }

    public function updatedSearch()
    {
        $this->showResults = !empty($this->search);
        $this->resetPage();
    }

    public function paginationView()
    {
        return 'vendor.livewire.tailwind';
    }
}
