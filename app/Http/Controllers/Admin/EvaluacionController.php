<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Controllers\Auth;
use App\QuestionOption;
use App\Question;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class EvaluacionController extends Controller
{
    public function index(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        
        $user = Post::where('nro_documento','=',$email)->where('id','=',$password)->first();
        
        if ($user !== null)
        {
            return view('admin.evaluacion.index')->with(['user' => $user]);
        }
        else
        {
            return Redirect::back()->with('msg','Datos incorrectos, vuelve a intentarlo.');
        }
    }

    public function show(Request $request)
    {

        $questions = Question::inRandomOrder()->limit(10)->get();
        foreach ($questions as &$question) {
            $question->options = QuestionOption::where('question_id', $question->id)->inRandomOrder()->get();
        }
        return view('admin.evaluacion.show',compact('questions'));

    }

    public function store(Request $request)
    {

        $result = 0;

        $test = Test::create([
            'user_id' => Auth::id(),
            'result'  => $result,
        ]);

        foreach ($request->input('questions', []) as $key => $question) {
            $status = 0;

            if ($request->input('answers.'.$question) != null
                && QuestionsOption::find($request->input('answers.'.$question))->correct
            ) {
                $status = 1;
                $result++;
            }
            TestAnswer::create([
                'user_id'     => Auth::id(),
                'test_id'     => $test->id,
                'question_id' => $question,
                'option_id'   => $request->input('answers.'.$question),
                'correct'     => $status,
            ]);
        }

        $test->update(['result' => $result]);

        return redirect()->route('results.show', [$test->id]);

    }
}
