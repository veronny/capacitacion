@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading text-center"><strong>Ficha de posts</strong></div>
                <div class="panel-body"> 
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-responsive" height="200" width="200" src="https://www.diresajunin.gob.pe/data/multimedia/1549425647_Logo-DIRESA-Normal.png" />
                        </div>
                        <div class="col-md-8 text-right">
                            <h4 style="color: #F81D2D;"><strong>Direccion Regional de Salud Junin</strong></h4>
                            <p>Jr. Julio Cesar Tello 488, Huancayo</p>
                            <p>(064) - 481270</p>
                            <p>info@diresajunin.gob.pe</p>
                        </div>
                    </div>
                    <br />
                    <div class="col-md-12 text-center">
                        La Direccion Regional de Salud Junin, a traves de la Direccion Ejecutiva de Promocion de la Salud, 
                        que la informacion contenida en este documento ha sido proporcianada por la empresa de transportes.
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>{{ $post->id }}</h2>
                            <h5><strong>Numero de Ficha</strong></h5>
                        </div>
                    </div>
                    <br />

                    <div class="text-center">
                        <h4 style="color: #3498DB ;"><strong>DATOS PERSONALES</strong></h4>    
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-xs-6 col-sm-3">
                            <p><strong>Tipo de Documento: </strong></p>
                            <p><strong>Numero de Documento: </strong></p>
                            <p><strong>Apellido Paterno: </strong></p>
                            <p><strong>Apellido Materno: </strong></p>
                            <p><strong>Nombres: </strong></p>
                            <p><strong>Fecha Nacimiento: </strong></p>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <p>{{ $post->tipo_documento }}</p>
                            <p>{{ $post->nro_documento }}</p>
                            <p>{{ $post->apellido_paterno }}</p>
                            <p>{{ $post->apellido_materno }}</p>
                            <p>{{ $post->nombres }}</p>
                            <p>{{ $post->fecha_nacimiento }}</p>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <p><strong>Edad: </strong></p>
                            <p><strong>Sexo: </strong></p>
                            <p><strong>Telefono: </strong></p>
                            <p><strong>Direccion: </strong></p>
                            <p><strong>Provincia: </strong></p>
                            <p><strong>Distrito: </strong></p>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <p>{{ $post->edad }}</p>
                            <p>{{ $post->sexo }}</p>
                            <p>{{ $post->telefono }}</p>
                            <p>{{ $post->direccion }}</p>
                            <p>{{ $post->provincia }}</p>
                            <p>{{ $post->distrito }}</p>
                        </div>
                        
                        </div>
                    </div>

                    <div class="text-center">
                        <h4 style="color: #3498DB ;"><strong>SALUD Y SERVICIOS DE TRANSPORTES</strong></h4>    
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-xs-6 col-sm-3">                  
                                <p><strong>Grado de instrucción: </strong></p>
                                <p><strong>Estado civil: </strong></p>
                                <p><strong>N° de hijos: </strong></p>
                                <p><strong>Peso: </strong></p>
                                <p><strong>Talla: </strong></p>
                                <p><strong>Es mayor de 65 años: </strong></p>
                                <p><strong>Co morbilidad:</strong></p>
                            </div>  
                            <div class="col-xs-6 col-sm-3">
                                <p>{{ $post->instruccion }}</p>
                                <p>{{ $post->civil }}</p>
                                <p>{{ $post->mayor_65 }}</p>
                                <p>{{ $post->peso }}</p>
                                <p>{{ $post->talla }}</p>
                                <p>{{ $post->hijos }}</p>
                                <p>{{ $post->embarazo }}</p>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <p><strong>Empresa de transporte: </strong></p>
                                <p><strong>Tipo de vehiculo: </strong></p>
                                <p><strong>Numero de Placa: </strong></p>
                                <p><strong>Numero de Brevete: </strong></p>
                                <p><strong>Cantidad de Pasajeros: </strong></p>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <p>{{ $post->empresa_trans }}</p>
                                <p>{{ $post->tipo_vehiculo }}</p>
                                <p>{{ $post->numero_placa }}</p>
                                <p>{{ $post->brevete }}</p>
                                <p>{{ $post->pasajeros }}</p>
                            </div>
                        
                        </div>
                    </div>
                </br>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col-md-6">
                                <p><strong>Fecha y Hora de posts: </strong></p>
                                <h4>{{ $post->created_at }}</h4>
                            </div>
                        </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
