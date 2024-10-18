<?php

use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::prefix('')->controller(QuizController::class)->group(function () {
        Route::get('/', 'form')->name('form');
        Route::post('/', 'submit')->name('submit');
    });
});
