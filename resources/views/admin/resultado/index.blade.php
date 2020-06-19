@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading text-center" >
                    <strong>Consulta de Notas y descarga de Constancias</strong> 
                </div>
                    <div class="panel-body">
                    
                        <div class="row">
                            <div class="col-sm-12 mx-auto">

                            <!-- Busqueda -->
                            <div class="btn-group" style="margin-right: 5px">
                                {{ Form::open(['route' => 'resultados','method' => 'GET', 'class' => 'form-inline pull-left' ]) }}
                                <div class="form-group">
                                    {{ Form::text('dni', null, ['class' => 'form-control','placeholder' => 'Ingresa numero DNI']) }}    
                                </div>

                                <div class="form-group">
                                    {{ Form::text('ficha', null, ['class' => 'form-control','placeholder' => 'Ficha Inscripcion']) }}    
                                </div>

                                <div class="form-group">
                                    {{ Form::text('apellido', null, ['class' => 'form-control','placeholder' => 'Apellido Paterno']) }}    
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        Buscar
                                    </button>
                                </div>
                                {{ Form::close()}}
                            </div>
                        </div> 
                    </div> 
                    
                    <div class="row">
                        <div class="col-sm-12 mx-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Examen</th>
                                    <th>DNI</th>
                                    <th>Nombres</th>
                                    <th>Ap Paterno</th>
                                    <th>Ap Materno</th>
                                    <th>Fecha Examen</th>
                                    <th>Nota</th>
                                    <th>Constancia</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($resultado as $r)
                                <tr>
                                    <td><font color="#4682B4">{{ $r->id }}</font></td>
                                    <td>{{ $r->dni }}</td>
                                    <td>{{ $r->nombre }}</td>
                                    <td>{{ $r->apellido_paterno }}</td>
                                    <td>{{ $r->apellido_materno }}</td>
                                    <td>{{ date('d-m-Y', strtotime($r->created_at)) }}</td>
                                    
                                    @if($r->opcion1 + $r->opcion2 + $r->opcion3 + $r->opcion4 + $r->opcion5 + $r->opcion6 + $r->opcion7 + $r->opcion8 + $r->opcion9 + $r->opcion10 > 13)
                                        <td><font color="#2E8B57">{{ $r->opcion1 + $r->opcion2 + $r->opcion3 + $r->opcion4 + $r->opcion5 + $r->opcion6 + $r->opcion7 + $r->opcion8 + $r->opcion9 + $r->opcion10 }}</font></td>
                                    @else
                                        <td><font color="#CD5C5C">{{ $r->opcion1 + $r->opcion2 + $r->opcion3 + $r->opcion4 + $r->opcion5 + $r->opcion6 + $r->opcion7 + $r->opcion8 + $r->opcion9 + $r->opcion10 }}</font></td>
                                    @endif
    
                                    
                                    @if($r->opcion1 + $r->opcion2 + $r->opcion3 + $r->opcion4 + $r->opcion5 + $r->opcion6 + $r->opcion7 + $r->opcion8 + $r->opcion9 + $r->opcion10 > 13)
                                    
                                    
                                     <td width="10px">
                                        <a href="{{ route('certificado', $r->id) }}" class="btn btn-success">
                                        <i class="fa fa-users"></i> Descargar</a>
                                    </td>
                                    
                                    @else
                                    <td>
                                        <span class="label label-danger">Desaprobado

                                        </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $resultado->render() }}
                        </div>        
                    </div>
            </div>      
        </div>  
    </div>
</div>
@endsection
