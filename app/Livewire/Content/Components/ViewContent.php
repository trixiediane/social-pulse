<?php

namespace App\Livewire\Content\Components;

use Livewire\Component;
use App\Models\Content;

class ViewContent extends Component
{
    public $content;
    public function mount($slug)
    {
        $this->content = Content::where('slug', $slug)->firstOrFail();
    }
}
