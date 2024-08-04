<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    // #[Validate('required', message: 'Credentials don\'t match our records.')]
    #[Validate('required')]
    public string $username = '';

    #[Validate('required')]
    public string $password = '';

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('livewire.guest');
    }

    public function login()
    {
        $credentials = $this->validate();

        if (auth()->attempt($credentials)) {
            request()->session()->regenerate();

            // session()->flash('status', 'Logged in Successfully!');

            $this->redirect('/');
        }

        session()->flash('status', 'Credentials don\'t match our records.');
    }
}
