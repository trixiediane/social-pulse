<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class PageProfile extends Component
{
    use WithFileUploads;
    public $username;
    public $email;
    public $profile_header;
    public $profile_picture;

    public $userId;

    public function mount()
    {
        $user = auth()->user();
        $this->userId = $user->id;
        $this->username = $user->username;
        $this->email = $user->email;
    }

    public function render()
    {
        return view(
            'livewire.profile.page-profile'
        );
    }

    public function update()
    {

        // Define conditional validation rules
        $rules = [];
        if ($this->username !== auth()->user()->username) {
            $rules['username'] = 'required|unique:users,username,' . $this->userId;
        }
        if ($this->email !== auth()->user()->email) {
            $rules['email'] = 'required|email|unique:users,email,' . $this->userId;
        }

        // Validate only if rules are set
        if (!empty($rules)) {
            $this->validate($rules);
        }

        try {
            $user = User::find($this->userId);

            if (!$user) {
                session()->flash('error', 'User not found.');
                return;
            }

            $user->update([
                'username' => $this->username,
                'email' => $this->email,
                'profile_picture' => $this->storeProfilePicture(),
                'profile_header' => $this->storeProfileHeader(),
            ]);

            session()->flash('success', 'Profile updated successfully.');
        } catch (Exception $e) {
            Log::error('Failed to update profile: ' . $e->getMessage());
            session()->flash('error', 'Failed to update profile: ' . $e->getMessage());
        }
    }

    protected function storeProfilePicture()
    {
        if ($this->profile_picture) {
            $path = $this->profile_picture->store('photos/profile_picture', 'public');
            return $path;
        }
        return null;
    }
    protected function storeProfileHeader()
    {
        if ($this->profile_header) {
            $path = $this->profile_header->store('photos/profile_header', 'public');
            return $path;
        }
        return null;
    }
}
