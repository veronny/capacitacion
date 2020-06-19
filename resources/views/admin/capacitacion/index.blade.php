@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <strong>VIDEOS DE CAPACITACION</strong> 
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                            <div class="panel with-nav-tabs panel-success">
                                <div class="panel-heading">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab1success" data-toggle="tab">PROMOCION DE LA SALUD</a></li>
                                            <li><a href="#tab2success" data-toggle="tab">SALUD AMBIENTAL</a></li>
                                            <li><a href="#tab3success" data-toggle="tab">DRTC JUNIN</a></li>
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown">PLATAFORMA DE CAPACITACION<span class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#tab4success" data-toggle="tab">INSCRIPCION</a></li>
                                                    <li><a href="#tab5success" data-toggle="tab">EVALUACION</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab1success">
                                          <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/brZ7JvCO_-0" allowfullscreen></iframe>
                                          </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2success">
                                          <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/m9vURrC3HFM" allowfullscreen></iframe>
                                          </div>  
                                        </div>
                                        <div class="tab-pane fade" id="tab3success">
                                          <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9SLhLTKPTT4" allowfullscreen></iframe>
                                          </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4success"> 
                                          <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QboV6lNlY7A" allowfullscreen></iframe>
                                          </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab5success">
                                          <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QboV6lNlY7A" allowfullscreen></iframe>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection