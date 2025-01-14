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
Route::resource('map',LandmarkController::class);
Route::resource('booking', BookingController::class);
Route::resource('users', UsersController::class);
