<?php

use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form');
});

Route::middleware(['web'])->group(function () {
    Route::prefix('')->controller(QuizController::class)->group(function () {
        Route::post('/', 'submit')->name('submit');
    });
});
