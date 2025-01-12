<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuidesController;

Route::get('/', function () {
    return view('mainpage');
});
// Display the feedback form
Route::get('/feedback', [GuidesController::class, 'showForm'])->name('feedback.show');

Route::get('/feedback', [GuidesController::class, 'showFeedback'])->name('feedback.form');
Route::get('/feedback', [GuidesController::class, 'submitFeedback'])->name('feedback.submit');
Route::get('/feedback-list', [GuestController::class, 'listFeedback'])->name('feedback.list');
Route::resource('guides', GuidesController::class);
