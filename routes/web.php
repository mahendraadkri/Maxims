<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index']);

Route::get('/contact', function () {
    return view('frontend.contactus');
})->name('contact');

// Contact form submit
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');

// Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected contact messages list
Route::middleware('auth')->group(function () {
    Route::get('/messages', [ContactUsController::class, 'index'])->name('messages.index');
});

Route::get('/about', function () {
    return view('frontend.aboutus');
})->name('about');
