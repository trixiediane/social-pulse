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
    public $sortColumn = 'title'; // Default sort column
    public $sortDirection = 'asc'; // Default sort direction

    public function render()
    {
        $query = Content::query()
            ->with('user')
            ->join('users', 'contents.user_id', '=', 'users.id') // Join with the users table
            ->select('contents.*', 'users.username') // Select required columns
            ->orderBy($this->sortColumn === 'username' ? 'users.username' : $this->sortColumn, $this->sortDirection);

        if ($this->status !== 'all') {
            $query->where('status', $this->status);
        }

        $contents = $query->paginate(5);

        return view('livewire.content.components.list-content', [
            'contents' => $contents,
        ]);
    }


    public function sortBy($column)
    {
        if ($this->sortColumn === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortColumn = $column;
            $this->sortDirection = 'asc';
        }
    }

    public function paginationView()
    {
        return 'vendor.livewire.tailwind';
    }
}
