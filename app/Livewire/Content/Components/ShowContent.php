<?php

namespace App\Livewire\Content\Components;

use App\Models\Content;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class ShowContent extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $userId;
    public function render()
    {
        $user = auth()->user();
        $this->userId = $user->id;

        return view(
            'livewire.content.components.show-content',
            [
                'contents' => Content::where('user_id', $this->userId)
                    ->orderBy('id', 'DESC')
                    ->paginate(4)
            ]
        );
    }
}
