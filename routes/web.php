<?php

use App\Http\Controllers\RsvpController;
use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/rsvp', [RsvpController::class, 'store'])->name('rsvp.store');

// Admin Login
Route::get('/admin/login', [AdminLoginController::class, 'show'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Protected Admin Routes
Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admin', [RsvpController::class, 'admin'])->name('admin');
    Route::put('/admin/rsvp/{rsvp}', [RsvpController::class, 'update'])->name('rsvp.update');
    Route::delete('/admin/rsvp/{rsvp}', [RsvpController::class, 'destroy'])->name('rsvp.destroy');
});
