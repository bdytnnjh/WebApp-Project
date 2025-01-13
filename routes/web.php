<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuidesController;
use App\Http\Controllers\FeedbackController;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/', function () {
    return view('feedback');
});

Route::resource('feedbacks',FeedbackController::class);

