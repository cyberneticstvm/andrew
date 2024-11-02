<?php

namespace App\Http\Controllers;

use App\Mail\ReportEmail;
use App\Models\Outcome;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\QuizLifeStyleDomain;
use App\Models\Strength;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use QuickChart;

class QuizController extends Controller
{
    private $settings;

    public function __construct()
    {
        $this->settings = DB::table('settings')->first();
    }

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
            $quiz = DB::transaction(function () use ($request, $input) {
                $quiz = Quiz::create($input);
                foreach ($request->dragval as $key2 => $item):
                    $data[] = [
                        'quiz_id' => $quiz->id,
                        'option_id' => $item,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];
                endforeach;
                QuizLifeStyleDomain::insert($data);
                return $quiz;
            });
            $strength = Strength::where('category', $quiz->category)->first();
            $strengths = Strength::all();
            $outcome = DB::table('outcomes')->where('category', $quiz->category)->where('outcome', $quiz->outcome)->first();
            $questions = DB::table('clarity_questions')->get();
            $focus = Outcome::where('category', $quiz->category)->where('outcome', $quiz->outcome)->first();
            $desc = Outcome::where('category', 'C')->where('outcome', $quiz->outcome)->first();
            $score = implode('', $quiz->q25);
            $chart = $this->generateChart($quiz);
            $chart = base64_encode(file_get_contents($chart));
            $data = ['name' => $quiz->name];
            $data['report'] = Pdf::loadView('report', compact('quiz', 'strength', 'chart', 'questions', 'outcome', 'strengths', 'focus', 'desc'));
            Mail::to($quiz->email)->send(new ReportEmail($data));
            $data1 = array('name' => $quiz->name, 'email' => $quiz->email, 'strength' => $strength->outcome, 'ffg' => $outcome->label, 'score' => $score);
            /*Mail::send('output', $data1, function ($message) use ($score) {
                if ($score >= 7):
                    $message->to($this->settings->gt_seven, 'Zapier');
                else:
                    $message->to($this->settings->lt_seven, 'Zapier');
                endif;
                $message->from($this->settings->admin_email, $this->settings->admin_name);
                $message->replyTo($this->settings->cc_email, $this->settings->cc_name);
                $message->subject('Lifestyle Design quiz submission');
            });*/
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('quiz.thankyou')->with(['quiz' => $quiz, 'strength' => $strength]);
    }

    function report(string $id)
    {
        $quiz = Quiz::findOrFail($id);
        $strength = Strength::where('category', $quiz->category)->firstOrFail();
        $strengths = Strength::all();
        $outcome = DB::table('outcomes')->where('category', $quiz->category)->where('outcome', $quiz->outcome)->first();
        $questions = DB::table('clarity_questions')->get();
        $focus = Outcome::where('category', $quiz->category)->where('outcome', $quiz->outcome)->first();
        $desc = Outcome::where('category', 'C')->where('outcome', $quiz->outcome)->first();
        $chart = $this->generateChart($quiz);
        $chart = base64_encode(file_get_contents($chart));
        /*$data = ['name' => $quiz->name];
        $data['report'] = Pdf::loadView('report', compact('quiz', 'strength', 'chart', 'questions', 'outcome', 'strengths', 'focus'));
        Mail::to($quiz->email)->send(new ReportEmail($data));
        echo "success";*/
        $pdf = PDF::loadView('report', compact('quiz', 'strength', 'chart', 'questions', 'outcome', 'strengths', 'focus', 'desc'));
        return $pdf->stream($quiz->id . '.pdf');
        //return view('report', compact('quiz', 'strength', 'chart', 'outcome', 'questions', 'strengths'));*/
    }

    function generateChart($quiz)
    {
        $rgb_c = DB::table('strengths')->where('category', 'C')->first()->rgb;
        $rgb_i = DB::table('strengths')->where('category', 'I')->first()->rgb;
        $rgb_o = DB::table('strengths')->where('category', 'O')->first()->rgb;
        $rgb_v = DB::table('strengths')->where('category', 'V')->first()->rgb;
        $rgb_a = DB::table('strengths')->where('category', 'A')->first()->rgb;
        $chart = new QuickChart(array(
            'width' => 700,
            'height' => 200
        ));
        $chart->setConfig("{
            type: 'bar',
            data: {
              datasets: [
                {
                    label: 'Compassion', 
                    data: [" . $quiz->c_per . "],
                    backgroundColor: 'rgb(" . $rgb_c . ")'
                },
                {
                    label: 'Innovation', 
                    data: [" . $quiz->i_per . "],
                    backgroundColor: 'rgb(" . $rgb_i . ")'
                },
                {
                    label: 'Optimism', 
                    data: [" . $quiz->o_per . "],
                    backgroundColor: 'rgb(" . $rgb_o . ")'
                },
                {
                    label: 'Vision', 
                    data: [" . $quiz->v_per . "],
                    backgroundColor: 'rgb(" . $rgb_v . ")'
                },
                {
                    label: 'Action', 
                    data: [" . $quiz->a_per . "],
                    backgroundColor: 'rgb(" . $rgb_a . ")'
                }
                ]
            },
            options: {
                legend: {
                    display: false
                }
            },
          }");
        return $chart->getUrl();
    }
}
