<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate('required|unique:users')]
    public string $username = '';

    #[Validate('required|email|unique:users')]
    public string $email = '';

    #[Validate('required|confirmed')]
    public string $password = '';

    #[Validate('required')]
    public string $password_confirmation = '';

    public function render()
    {
        return view('livewire.auth.register')
            ->layout('livewire.guest');
    }
    public function register()
    {
        $data = $this->validate();

        $user = User::create($data);

        auth()->login($user);

        $user->assignRole('User');

        request()->session()->regenerate();

        return redirect('/');
    }
}
