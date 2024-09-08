<?php

namespace App\Livewire\User\Components;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewUser extends Component
{
    public $user;           // The user whose profile is being viewed.
    public $isFollowing;    // Whether the authenticated user is following this profile.
    public $isOwnProfile;   // Whether the authenticated user is viewing their own profile.

    /**
     * Runs when the component is initialized. Loads the user's profile data.
     *
     * @param int $userId - The ID of the user being viewed.
     */
    public function mount($userId)
    {
        // Find the user by ID and throw an error if not found.
        $this->user = User::findOrFail($userId);

        // Check if the authenticated user is viewing their own profile by comparing IDs.
        $this->isOwnProfile = Auth::check() && Auth::id() === $this->user->id;

        // If it's not their own profile, check if the authenticated user is following this user.
        $this->isFollowing = !$this->isOwnProfile && Auth::check()
            ? Auth::user()->following->contains($this->user->id)
            : false;
    }

    /**
     * Handles the follow/unfollow action.
     */
    public function toggleFollow()
    {
        // Only proceed if the user is authenticated and not viewing their own profile.
        if (Auth::check() && !$this->isOwnProfile) {
            // Use the 'toggle' method to follow/unfollow the user. It adds/removes the user ID from the 'following' list.
            Auth::user()->following()->toggle($this->user->id);

            // Update the local state to reflect the new follow/unfollow status.
            $this->isFollowing = !$this->isFollowing;
        }
    }

    /**
     * Renders the component's view.
     */
    public function render()
    {
        // Return the Blade view for displaying the user profile and follow/unfollow button.
        return view('livewire.user.components.view-user');
    }
}
