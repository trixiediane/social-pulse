<?php

namespace App\Livewire\Content\Components;

use App\Models\Content;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class ShowContent extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $userId;

    #[On('content-created')]
    public function render()
    {
        $user = auth()->user();
        $this->userId = $user->id;

        $query = Content::query();

        if ($user->hasRole('Admin')) {
            $query->where('status', "APPROVED");
        } else {
            $query->where('user_id', $this->userId);
        }

        $query->orderBy('id', 'DESC');

        $contents = $query->paginate(4);

        return view(
            'livewire.content.components.show-content',
            [
                'contents' => $contents
            ]
        );
    }
}
