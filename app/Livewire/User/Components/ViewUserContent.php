<?php

namespace App\Livewire\User\Components;

use App\Models\Content;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class ViewUserContent extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $userId;
    public function mount($userId)
    {
        $this->userId = $userId;
    }

    public function render()
    {
        $contents = Content::where('user_id', $this->userId)
            ->orderBy('id', 'DESC')
            ->paginate(4);
        return view(
            'livewire.user.components.view-user-content',
            [
                'contents' => $contents
            ]
        );
    }
}
