<?php

namespace App\Livewire\Content\Components;

use Livewire\Component;
use App\Models\Content;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class ViewContent extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $content;
    public function mount($slug)
    {
        $this->content = Content::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        $contents = Content::with('user')
            ->where('approved', 0)
            ->paginate(3);

        return view(
            'livewire.content.components.view-content',
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
