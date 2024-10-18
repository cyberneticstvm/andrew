<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Exception;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    function form()
    {
        $questions = Question::all();
        return view('form', compact('questions'));
    }

    function submit(Request $request)
    {
        $request->validate([
            'h-captcha-response' => 'required'
        ]);
        try {
            //
        } catch (Exception $e) {
            return redirect()->back()->withInput($request->all());
        }
    }
}
