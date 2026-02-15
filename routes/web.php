<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Chat;

Route::get('/chat', [Chat::class, 'chat'])->name('chat');


Route::get('/', function () {return view('pages.home');})->name('home');
Route::get('/about', function () {return view('pages.about');})->name('about');
Route::get('/contact', function () {return view('pages.contact');})->name('contact');
Route::get('/sustainability-&-global-reach', function () {return view('pages.sustainability');})->name('sustainability');
Route::get('/portfolio', function () {return view('pages.portfolio');})->name('portfolio');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
