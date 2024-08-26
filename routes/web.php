<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Content\Components\CreateContent;
use App\Livewire\Content\Components\ViewContent;
use App\Livewire\Content\PageContent;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Profile\PageProfile;
use App\Livewire\User\Components\ViewUser;
use App\Livewire\User\PageUser;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
});

Route::middleware('auth')->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');

    Route::get('/content', PageContent::class)->name('content');
    Route::get('/content/create', CreateContent::class)->name('create.content');
    Route::get('/content/view/{slug}', ViewContent::class)->name('content.view');

    Route::get('/profile', PageProfile::class)->name('profile');

    Route::get('/user/{username}', PageUser::class)->name('user.view');
});
