<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuidesController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\LandmarkController;

Route::get('/', function () {
    return view('mainpage');
});

Route::resource('guides',GuidesController::class);
Route::resource('feedbacks',FeedbackController::class);
Route::get('/landmarks/create', [LandmarkController::class, 'create'])->name('landmarks.create');
Route::post('/landmarks', [LandmarkController::class, 'store'])->name('landmarks.store');
Route::resource('bookings', BookingController::class);
Route::resource('users', UsersController::class);
