<?php

namespace App\Livewire\Content\Components;

use App\Models\Content;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;

class ReviewContent extends Component
{
    public $content = '';
    public $reviewModal = false;
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

    #[On('review-content-modal')]
    public function openReviewModal($id, $reviewModal)
    {
        $this->content = Content::findOrFail($id);

        $this->contentId = $this->content->id;
        $this->title = $this->content->title;
        $this->short_description = $this->content->short_description;
        $this->body = $this->content->body;
        $this->photo = Storage::url($this->content->photo);

        $this->reviewModal = $reviewModal;
    }

    public function closeReviewModal()
    {
        $this->reviewModal = false;
    }

    public function updateContentStatus($status)
    {
        $userId = auth()->user()->id;

        $this->content->update([
            'status' => $status,
            'updated_by' => $userId
        ]);

        session()->flash('confirmation', 'Updated the content status to: ' . $status);
        $this->redirect('content');
    }
}
