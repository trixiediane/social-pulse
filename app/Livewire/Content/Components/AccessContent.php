<?php

namespace App\Livewire\Content\Components;

use App\Models\Content;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class AccessContent extends Component
{
    use WithPagination, WithoutUrlPagination;
    public function render()
    {
        $contents = Content::with('user')
            ->where('approved', 0)
            ->orderBy('id', 'DESC')
            ->paginate(3);

        return view(
            'livewire.content.components.access-content',
            [
                'contents' => $contents
            ]
        );
    }

    public function openEditModal($id, $editModal)
    {
        $this->dispatch('edit-basic-modal', $id, editModal: $editModal);
    }
}
