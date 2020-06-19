@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading text-center"><strong>MODULOS DEL SISTEMA</strong></div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <img class="img-thumbnail" src="{{ url('img/plataforma_capacitacion.png') }}">  
                    </div>
                    
                    <div class="col-md-6">
                        <div class="list-group">
                            <a href="#" class="list-group-item active text-center">
                            <strong>SELECCIONE UNA OPCION</strong>
                            </a>
                            <a href="{{ route('posts.index') }}" class="list-group-item list-group-item-info"><h4><strong>1. Inscripcion (Empresas)</strong></h4></a>
                            <a href="{{ route('capacitacion') }}" class="list-group-item"><h4><strong>2. Capacitacion</strong></h4></a>
                            <a href="{{ route('alumno') }}" class="list-group-item"><h4><strong>3. Evaluacion y Constancia</strong></h4></a>
                            <a href="{{ route('resultados') }}" class="list-group-item list-group-item-warning"><h4><strong>4. Consulta de Constancia</strong></h4></a>
                        </div>
                        
                        
                        <div class="alert alert-danger text-center" role="alert">
                            <h4>
                                <a href="https://www.youtube.com/watch?v=QboV6lNlY7A&feature=emb_title" target="_blank" class="text-danger"> 
                                    <strong>Ver Video-Tutorial de Inscripcion<strong>
                                </a>    
                            </h4>
                            <h4>
                                <a href="https://www.youtube.com/watch?v=QboV6lNlY7A&feature=emb_title" target="_blank" class="text-danger"> 
                                    <strong>Ver Video-Tutorial de Evaluacion<strong>
                                </a>    
                            </h4>
                        </div>

                        
                        <strong>Consultas y/o dudas:</strong><span class="text-primary"> vmorales@diresajunin.gob.pe</span>
                        </br>
                        <span class="text-primary">Telf: (064) 48-1270</span>
                        </br>
                        <span class="text-secondary">Direccion Regional de Salud Junin - 2020 </span>

                   
                    </div>
                                   
                </div>
            </div>
         
        </div>
    </div>
</div>
@endsection
