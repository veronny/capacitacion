@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Bienvenido!</div>

                <div class="text-center">
                    <h3>
                    <strong>Nro DNI:  </strong>
                    <strong>{{ $user->nro_documento }}</strong>
                    </h3>                    
                </div>
                
                <div class="text-center">
                    <h3>
                    <strong>{{ $user->nombres }} </strong>
                    <strong>{{ $user->apellido_paterno }}</strong>
                    <strong>{{ $user->apellido_materno }}</strong>
                    </h3>
                </div>                
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Evaluacion
                </div>
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
