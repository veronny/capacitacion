@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Videos
                </div>

                <div class="panel-body">
                  
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2kWtspEAww4" allowfullscreen></iframe>
                  </div>
                </br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iYMpi7Kcdbk" allowfullscreen></iframe>
                  </div>
                </br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wyjU2xVXm4A" allowfullscreen></iframe>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection