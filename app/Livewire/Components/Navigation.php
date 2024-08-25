<?php

namespace App\Livewire\Components;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class Navigation extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search = '';
    public $showResults = false;

    public function updatedSearch()
    {
        $this->showResults = !empty($this->search);
        $this->resetPage();
    }

    public function render()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'User');
        })
            ->orderBy('id', 'DESC')
            ->search(['username'], $this->search)
            ->paginate(5);

        return view('livewire.components.navigation', [
            'users' => $users,
            'showResults' => $this->showResults
        ]);
    }
}
