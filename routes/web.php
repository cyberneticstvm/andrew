<?php

use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::prefix('')->controller(QuizController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/mobile', 'mobile')->name('mobile');
        Route::get('/quiz', 'form')->name('quiz');
        Route::post('/quiz', 'submit')->name('submit');
        Route::get('/report/{id}', 'report')->name('report');
        Route::get('/thankyou', function () {
            return view('thankyou');
        })->name('quiz.thankyou');
    });
});
