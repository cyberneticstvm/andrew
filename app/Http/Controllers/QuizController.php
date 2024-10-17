<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    function submit(Request $request)
    {
        $request->validate([
            'h-captcha-response' => 'required|captcha',
        ]);
        dd($request);
        die;
    }
}
