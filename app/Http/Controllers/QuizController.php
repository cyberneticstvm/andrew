<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\Strength;
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
            'name' => 'required',
            'email' => 'required|email',
            'h-captcha-response' => 'required'
        ]);
        try {
            $input = $request->except(array('dragval', 'g-recaptcha-response', 'h-captcha-response'));
            $category = array('C' => 0, 'I' => 0, 'O' => 0, 'V' => 0, 'A' => 0);
            $outcome = array('FIT' => 0, 'ROM' => 0, 'NEW' => 0, 'HOM' => 0, 'PST' => 0, 'FUN' => 0, 'FAM' => 0, 'NXT' => 0, 'FIN' => 0, 'GRW' => 0);

            foreach ($input as $key => $val):
                if (is_array($val)):
                    foreach ($val as $key1 => $val1):
                        $category['C'] += ($val1 == 'C') ? 1 : 0;
                        $category['I'] += ($val1 == 'I') ? 1 : 0;
                        $category['O'] += ($val1 == 'O') ? 1 : 0;
                        $category['V'] += ($val1 == 'V') ? 1 : 0;
                        $category['A'] += ($val1 == 'A') ? 1 : 0;

                        $outcome['FIT'] += ($val1 == 'FIT') ? 1 : 0;
                        $outcome['ROM'] += ($val1 == 'ROM') ? 1 : 0;
                        $outcome['NEW'] += ($val1 == 'NEW') ? 1 : 0;
                        $outcome['HOM'] += ($val1 == 'HOM') ? 1 : 0;
                        $outcome['PST'] += ($val1 == 'PST') ? 1 : 0;
                        $outcome['FUN'] += ($val1 == 'FUN') ? 1 : 0;
                        $outcome['FAM'] += ($val1 == 'FAM') ? 1 : 0;
                        $outcome['NXT'] += ($val1 == 'NXT') ? 1 : 0;
                        $outcome['FIN'] += ($val1 == 'FIN') ? 1 : 0;
                        $outcome['GRW'] += ($val1 == 'GRW') ? 1 : 0;
                    endforeach;
                endif;
            endforeach;

            $sum = array_sum($category);
            $input['c_per'] = ($category['C'] > 0) ? ceil((100 / $sum) * $category['C']) : 0;
            $input['i_per'] = ($category['I'] > 0) ? ceil((100 / $sum) * $category['I']) : 0;
            $input['o_per'] = ($category['O'] > 0) ? ceil((100 / $sum) * $category['O']) : 0;
            $input['v_per'] = ($category['V'] > 0) ? ceil((100 / $sum) * $category['V']) : 0;
            $input['a_per'] = ($category['A'] > 0) ? ceil((100 / $sum) * $category['A']) : 0;
            $input['category'] = array_search(max($category), $category);
            $input['outcome'] =  array_search(max($outcome), $outcome);
            $quiz = Quiz::create($input);
            $strength = Strength::where('category', $quiz->category)->first();
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('quiz.thankyou')->with(['quiz' => $quiz, 'strength' => $strength]);
    }
}
