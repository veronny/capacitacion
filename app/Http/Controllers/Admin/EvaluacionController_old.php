<?php

namespace App\Http\Controllers\Admin;


use App\Alumno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\QuestionOption;
use App\Question;
use App\Result;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EvaluacionRequest;
use App\User;

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

        $test = Result::create([
            'user_id' => Post::id(),
            'result'  => $result,
        ]);

        foreach ($request->input('questions', []) as $key => $question) {
            $status = 0;

            if ($request->input('answers.'.$question) != null
                && QuestionsOption::find($request->input('answers.'.$question))->correct
                && QuestionsOption::find($request->input('answers.'.$question))->correct
            ) {
                $status = 1;
                $result++;
            }
           
            Result::create([
                'user_id'     => Post::id(),
                'test_id'     => $test->id,
                'question_id' => $question,
                'option_id'   => $request->input('answers.'.$question),
                'correct'     => $status,
            ]);
        }

        $test->update(['result' => $result]);

        return redirect()->route('evaluacion', [$test->id]);
    }
        
        //$resultado = Result::create($request->all());
        //$this->authorize('user_id', $resultado);

        //return redirect()->route('evaluacion')->with('info', 'Inscripcion creada con éxito');
    //}
}
