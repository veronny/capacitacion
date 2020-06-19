@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {!! Form::open(['method' => 'POST','route' => ['guardar_evaluacion']]) !!}
            {{csrf_field()}}
            <div class="panel panel-primary">
                <div class="panel-heading text-center"><strong>Examen de Evaluacion</strong></div>
                <div class="panel-body">                                      
                    @if(count($questions) > 0)
                    <div class="panel-body">
                    <?php $i = 1; ?>
                    @foreach($questions as $question)
                        @if ($i > 1) <hr /> @endif
                        <div class="row">
                            <div class="col-xs-12 form-group">
                                <div class="form-group">
                                    <strong>Pregunta Nro {{ $i }}.<br />{!! nl2br($question->question_text) !!}</strong>
            
                                    @if ($question->code_snippet != '')
                                        <div class="code_snippet">{!! $question->code_snippet !!}</div>
                                    @endif
            
                                    <input type="hidden" name="questions[{{ $i }}]" value="{{ $question->id }}">
                                @foreach($question->options as $option)
                                    <br>
                                    <label class="radio-inline">
                                        <input
                                            type="radio"
                                            name="answers[{{ $question->id }}]"
                                            value="{{ $option->id }}">
                                        {{ $option->option }}
                                    </label>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    <?php $i++; ?>
                    @endforeach
                    </div>
                @endif
            </div>
            <div class="form-group text-center">
                {!! Form::submit('Enviar Evaluacion', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
