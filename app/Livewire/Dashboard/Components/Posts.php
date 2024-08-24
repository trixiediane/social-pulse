<?php

namespace App\Livewire\Dashboard\Components;

use App\Models\Content;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination, WithoutUrlPagination;
    public function render()
    {
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
                'contents' => $contents
            ]
        );
    }

    public function paginationView()
    {
        return 'vendor.livewire.tailwind';
    }
}
