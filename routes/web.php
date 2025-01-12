<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuidesController;

Route::get('/', function () {
    return view('mainpage');
});
// Display the feedback form
Route::get('/feedback', [GuidesControlleer::class, 'showForm'])->name('feedback.show');

<<<<<<< HEAD
// Handle feedback form submission
Route::post('/feedback', [GuidesController::class, 'submitForm'])->name('feedback.submit');
=======
Route::get('/feedback', [GuidesController::class, 'showFeedback'])->name('feedback.form');
Route::get('/feedback', [GuidesController::class, 'submitFeedback'])->name('feedback.submit');
Route::get('/feedback-list', [GuestController::class, 'listFeedback'])->name('feedback.list');
Route::resource('guides', GuidesController::class);
>>>>>>> 626012bfb0be9684b283fc264689dd9050f62eb5
