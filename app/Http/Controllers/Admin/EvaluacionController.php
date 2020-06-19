<?php

namespace App\Http\Controllers\Admin;

use App\Alumno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Controllers\Auth;
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
       
        return view('admin.evaluacion.show');
    }

    public function store(Request $request)
    {
       
        $validatedData = $request->validate([

            'opcion1' => 'nullable',
            'opcion2' => 'nullable',
            'opcion3' => 'nullable',
            'opcion4' => 'nullable',
            'opcion5' => 'nullable',
            'opcion6' => 'nullable',
            'opcion7' => 'nullable',
            'opcion8' => 'nullable',
            'opcion9' => 'nullable',
            'opcion10' => 'nullable',
            'id' => 'nullable',
            'user_id'=> 'nullable',
            'dni' => 'nullable',
            'nombre' => 'nullable',
            'apellido_paterno'=> 'nullable',
            'apellido_materno'=> 'nullable',
            
        ]);
      
        $nota = Result::create($validatedData);

      //  return view('admin.evaluacion.resultado', compact('nota','notas'))->withErrors(['field_name' => ['Examen enviado correctamente']]);
        return redirect()->route('resultados')->withErrors(['field_name' => ['Examen enviado correctamente']]);;
    }

        
}
