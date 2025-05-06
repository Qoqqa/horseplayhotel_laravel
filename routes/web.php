<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ContactController;

// Public routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/reservation', [ReservationController::class, 'create'])->name('reservation');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.submit');

// Contact form submission route
Route::post('/contacts/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
        Route::post('/login', [AdminController::class, 'login']);
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::delete('/reservations/{id}', [AdminController::class, 'deleteReservation'])->name('admin.reservations.delete');
    });
});
