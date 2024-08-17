<?php

namespace App\Livewire\Content\Components;

use App\Models\Content;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;

class ReviewContent extends Component
{
    public $content = '';
    public $editModal = false;
    public $contentId;
    public $title;
    public $short_description;
    public $body;
    public $photo;

    // Render method to return the view
    public function render()
    {
        return view(
            'livewire.content.components.review-content'
        );
    }

    #[On('edit-basic-modal')]
    public function openEditModal($id, $editModal)
    {
        $this->content = Content::findOrFail($id);

        $this->contentId = $this->content->id;
        $this->title = $this->content->title;
        $this->short_description = $this->content->short_description;
        $this->body = $this->content->body;
        $this->photo = Storage::url($this->content->photo);

        $this->editModal = $editModal;
    }
}
