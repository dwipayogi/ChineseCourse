<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/course/{slug}', App\Livewire\CourseDetail::class)->name('show');

Route::middleware('guest')->group(function () {
    Route::get('/login', App\Livewire\Login::class)->name('login');
});

Route::get('/login', App\Livewire\Login::class)->name('login');
Route::get('/register', App\Livewire\Register::class)->name('register');
Route::get('/dashboard', App\Livewire\Dashboard::class)->name('dashboard');
Route::get('/faq', App\Livewire\Faq::class)->name('faq');
Route::get('/send-email')->name('mail');
Route::get('/chatbot', App\Livewire\Chatbot::class)->name('chatbot');