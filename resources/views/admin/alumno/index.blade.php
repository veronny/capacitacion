@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Ingresar al modulo evaluacion</div>
                
                <div class="alert alert-warning col-md-10 col-md-offset-1" role="alert">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            Son <strong>10 Preguntas</strong> y solo puedes seleccionar una
                        </div>
                        <div class="col-md-4 text-center">
                            El DNI y el numero de ficha se encuentra en la <strong>Ficha de incripcion</strong>
                        </div>
                        <div class="col-md-4 text-center">
                            La <strong>nota minima</strong> para la emision de la constancia es <strong>14</strong>
                        </div>
                    </div>
                </div>
                
                
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('evaluacion') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">DNI</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="" required autofocus>
                           </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Nro Ficha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                    
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ingresar
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
