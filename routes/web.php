<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuidesController;

Route::get('/', function () {
    return view('welcome');
});
// Display the feedback form
Route::get('/feedback', [GuidesControlleer::class, 'showForm'])->name('feedback.show');

// Handle feedback form submission
Route::post('/feedback', [GuidesController::class, 'submitForm'])->name('feedback.submit');
