<?php

namespace App\Livewire\Content\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\Content;
use Livewire\WithFileUploads;

class CreateContent extends Component
{
    use WithFileUploads;
    public $title;
    public $short_description;
    public $body;
    public $photo;

    protected $rules = [
        'title' => 'required|string|max:255',
        'short_description' => 'required|string|max:500',
        'body' => 'required|string',
        'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ];

    public function createContent()
    {
        $this->validate(); // Validate the form data

        try {
            Content::create([
                'title' => $this->title,
                'short_description' => $this->short_description,
                'body' => $this->body,
                'photo' => $this->storePhoto(), // Handle photo storage
                'user_id' => Auth::id(), // Set the current user as the owner
            ]);

            session()->flash('message', 'Content created successfully!');
            $this->reset(); // Reset the form fields after successful creation

            $this->dispatch('content-created');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to create content: ' . $e->getMessage());
        }
    }

    protected function storePhoto()
    {
        if ($this->photo) {
            $path = $this->photo->store('photos', 'public');
            return $path;
        }
        return null;
    }

    public function render()
    {
        return view('livewire.content.components.create-content');
    }
}
