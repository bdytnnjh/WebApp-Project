<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/feedback', [GuidesController::class, 'showFeedback'])->name('feedback.form');
Route::get('/feedback', [GuidesController::class, 'submitFeedback'])->name('feedback.submit');
Route::get('/feedback-list', [GuestController::class, 'listFeedback'])->name('feedback.list');
Route::resource('guides', GuidesController::class);
