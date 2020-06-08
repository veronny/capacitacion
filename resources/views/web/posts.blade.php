@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Bienvenido</h1>
            
            <div class="panel panel-primary">
                <div class="panel-heading"><strong>Modulos del Sistema</strong></div>

                <div class="panel-body">
                    <div class="col-md-6">
                        <img class="img-thumbnail" src="{{ url('img/plataforma_capacitacion.png') }}">  
                    </div>
                    
                    <div class="col-md-6">
                        <div class="list-group">
                            <a href="#" class="list-group-item active">
                            <strong>Selecciona una opcion</strong>
                            </a>
                            <a href="{{ route('login') }}" class="list-group-item"><strong>1. Inscripcion</strong></a>
                            <a href="{{ route('capacitacion') }}" class="list-group-item"><strong>2. Capacitacion</strong></a>
                            <a href="{{ route('alumno') }}" class="list-group-item"><strong>3. Evaluacion y Certificacion</strong></a>
                        </div>
                        <span class="text-secondary">Direccion Regional de Salud Junin - 2020 </span>
                        </br>
                        <span class="text-primary">info@diresajunin.gob.pe</span>
                        </br>
                        <span class="text-primary">Telf: (064) 48-1270</span>
                    </div>
                                   
                </div>
            </div>
         
        </div>
    </div>
</div>
@endsection
