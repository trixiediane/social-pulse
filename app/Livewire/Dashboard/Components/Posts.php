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

        $query = Content::query();

        $query->with('user');

        if (auth()->user()->hasRole('User')) {
            $query->where('status', 'PENDING');
        } else {
            $query->where('status', 'APPROVED');
        }

        $query->orderBy('updated_at', 'DESC');

        $contents = $query->paginate(10);

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
