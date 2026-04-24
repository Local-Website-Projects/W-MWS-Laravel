<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Chat;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Http;

Route::get('/chat-test', [Chat::class, 'index']);
Route::post('/chat-test/send', [Chat::class, 'chat'])->name('chat.send');

Route::get('/test-ai', function () {
    $response = Http::withToken(config('ai.providers.openai.key'))
        ->get('https://api.openai.com/v1/vector_stores/vs_69e9ccc2fb5881918d10624f65eceb22');
    
    return $response->json();
});


Route::get('/', function () {return view('pages.home');})->name('home');
Route::get('/about', function () {return view('pages.about');})->name('about');
Route::get('/contact', function () {return view('pages.contact');})->name('contact');
Route::get('/sustainability-&-global-reach', function () {return view('pages.sustainability');})->name('sustainability');
Route::get('/portfolio', function () {return view('pages.portfolio');})->name('portfolio');
Route::get('/roadmap', function () {return view('pages.roadmap');})->name('roadmap');
Route::post('/contact',[ContactController::class,'store'])->name('contact.store');

Route::get('/dashboard', [LeadController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('get-message/{session_id}',[LeadController::class,'showMessage'])->name('messages.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
