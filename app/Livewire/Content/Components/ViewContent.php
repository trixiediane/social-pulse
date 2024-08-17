<?php

namespace App\Livewire\Content\Components;

use Livewire\Component;
use App\Models\Content;

class ViewContent extends Component
{
    public $content;

    // Mount method to initialize the component with the slug
    public function mount($slug)
    {
        $this->content = Content::where('slug', $slug)->firstOrFail();
    }

    // Render method to return the view
    public function render()
    {
        return view('livewire.content.components.view-content');
    }
}
