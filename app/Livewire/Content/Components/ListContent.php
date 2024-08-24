<?php

namespace App\Livewire\Content\Components;

use App\Models\Content;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Features\SupportPagination\WithoutUrlPagination;

class ListContent extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $status = 'all';

    public function render()
    {
        // Initial query
        $query = Content::query();

        $query->with('user');

        // Apply status filter
        if ($this->status !== 'all') {
            $query->where('status', $this->status);
        }

        // Paginate the results
        $contents = $query->paginate(5);

        return view('livewire.content.components.list-content', [
            'contents' => $contents,
        ]);
    }

    public function paginationView()
    {
        return 'vendor.livewire.tailwind';
    }
}
