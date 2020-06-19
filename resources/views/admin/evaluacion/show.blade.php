@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading text-center"><strong>Examen de Evaluacion</strong></div>
                <div class="panel-body">                                      
                {!! Form::open(['method' => 'GET','route' => ['guardar_evaluacion']]) !!}  
                
                    @include('admin.evaluacion.partials.form')
                
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
