<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        
        #fondo {
                background-image: url( {{ url('img/CERTIFICADO_29.jpg') }} );
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
        }
       
        .center {
            height: 100%;
            width: 100%;
            position: absolute;
            top:60%;
            margin-top:-55px;
            text-align: center;         
        }

        .piepagina {
            height: 100%;
            width: 100%;
            position: absolute;
            top:93%;
            margin-top:-55px;
            text-align: left;
            margin-left: 35px;

        }
        
        h3 {
            text-align: center;
            font-size: 200%;
            padding: 0px;
        }
        
        h4 {
            text-align: center;
            font-size: large;
            font-color: #f8f7f7;
        }
        
        #medidesc {
            text-align: left;
        }
    </style>
    
</head>

<body id="fondo">
        <div class="center">
            @foreach($certificado as $s)
            <div>
            <h3>{{ $s->apellido_paterno }} {{ $s->apellido_materno }} {{ $s->nombre }}</h3>               
            </div>              
            @endforeach    
        </div>  
        
        <div class="piepagina">
            @foreach($certificado as $s)
            <div><span>Nro de Examen: </span>{{ $s->id }}</div>
            <div><span>Nro de DNI: </span>{{ $s->dni }}</div>
            <div><span>Ficha Inscripcion: </span>{{ $s->user_id }}
            <div><span>Nota: </span>{{ $s->opcion1 + $s->opcion2 + $s->opcion3 + $s->opcion4 + $s->opcion5 + $s->opcion6 + $s->opcion7 + $s->opcion8 + $s->opcion9 + $s->opcion10 }}
            <div><span>Fecha Examen: </span>{{ date('d-m-Y', strtotime($s->created_at))}}
            @endforeach 
        </div> 

</body>
</html>    
        
        