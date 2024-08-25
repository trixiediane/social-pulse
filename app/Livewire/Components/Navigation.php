<?php

namespace App\Livewire\Components;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class Navigation extends Component
{
    public function render()
    {
        return view('livewire.components.navigation');
    }
}
