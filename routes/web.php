<?php

use App\Livewire\Artist\Auth\ArtistRegister;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/home', Home::class)->name('home');
Route::get('/artist/register', ArtistRegister::class)->name('artist.register');

require __DIR__ . '/auth.php';
