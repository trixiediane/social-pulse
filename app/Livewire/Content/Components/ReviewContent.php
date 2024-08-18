<?php

namespace App\Livewire\Content\Components;

use App\Models\Content;
use App\Models\Revision;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Illuminate\Support\Str;

class ReviewContent extends Component
{
    public $content = '';
    public $reviewModal = false;
    public $contentId;
    public $title;
    public $short_description;
    public $body;
    public $photo;
    public $comments;
    public $userId;
    public $revisionModal = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'short_description' => 'required|string|max:500',
        'body' => 'required|string',
        'comments' => 'required|string',
    ];

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
        $this->content = Content::with('revisions')->findOrFail($id);

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
        $this->userId = auth()->user()->id;

        $this->content->update([
            'status' => $status,
            'updated_by' => $this->userId
        ]);

        session()->flash('confirmation', 'Updated the content status to: ' . $status);
        $this->redirect('content');
    }

    public function openRevisionModal()
    {
        $this->revisionModal = true;
    }
    public function closeRevisionModal()
    {
        $this->revisionModal = false;
    }

    public function submitRevision()
    {
        $this->validate();
        $this->userId = auth()->user()->id;
        // Generate a base slug from the title
        $baseSlug = Str::slug($this->title);

        // Append a random string or number to the base slug
        $randomString = Str::random(6); // Generate a random string of 6 characters
        $slug = "{$baseSlug}-{$randomString}";

        $this->content->update([
            'status' => 'RESUBMIT',
            'updated_by' => $this->userId
        ]);

        $revision = Revision::create([
            'title' => $this->title,
            'short_description' => $this->short_description,
            'body' => $this->body,
            'comments' => $this->comments,
            'content_id' => $this->contentId,
            'requested_by' => $this->userId,
            'slug' => $slug
        ]);

        $this->dispatch('requested-revision', message: 'Requested a revision and to re-submit!');
        $this->revisionModal = false;
        $this->reviewModal = false;
    }
}
