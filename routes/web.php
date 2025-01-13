<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuidesController;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');

Route::post('/feedback/store', [GuidesController::class, 'store'])->name('feedback.store');

// Guides resource routes
Route::resource('guides', GuidesController::class);
