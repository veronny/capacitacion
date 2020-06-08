@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Bienvenido!</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            Son 10 Preguntas puedes seleccionar solo uno
                        </div>
                        <div class="col-md-4 text-center">
                            La duracion del examen es 10 minutos
                        </div>
                        <div class="col-md-4 text-center">
                            La nota minima es 14
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Evaluacion
                    <a href="{{ route('detalle_evaluacion') }}" class="pull-right btn btn-sm btn-primary">
                        Iniciar Examen
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">Examen</th>
                                <th>Nro Doc.</th>
                                <th>Nombres</th>
                                <th>Ap Paterno</th>
                                <th>Ap Materno</th>
                                <th>Nota</th>
                                <th>Condicion</th>
                                <th>Certificado</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>   
                    </table>     	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
