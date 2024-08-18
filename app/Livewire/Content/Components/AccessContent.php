<?php

namespace App\Livewire\Content\Components;

use App\Models\Content;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class AccessContent extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $show = false;
    public $message = '';
    protected $listeners = ['showAlert'];

    public function mount()
    {
        $this->show = session()->has('confirmation');
        $this->message = session('confirmation', '');
    }

    public function render()
    {
        $contents = Content::with('user')
            ->where('status', "PENDING")
            ->orderBy('id', 'DESC')
            ->paginate(3);

        return view(
            'livewire.content.components.access-content',
            [
                'contents' => $contents
            ]
        );
    }

    public function openReviewModal($id, $reviewModal)
    {
        $this->dispatch('review-content-modal', $id, reviewModal: $reviewModal);
        $this->closeAlert();
    }

    #[On('requested-revision')]
    public function showAlert($message)
    {
        $this->message = $message;
        $this->show = true;
    }

    public function closeAlert()
    {
        $this->show = false;
    }
}
