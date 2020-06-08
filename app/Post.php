<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
                            'id',
                            'user_id',
                            'category_id',
                            'name',
                            'slug',
                            'excerpt',
                            'body',
                            'status',
                            'file',
                            'tipo_documento',
                            'nro_documento',
                            'nombres',
                            'apellido_paterno',
                            'apellido_materno',
                            'fecha_nacimiento',
                            'edad',
                            'sexo',
                            'peso',
                            'talla',
                            'hijos',
                            'civil',
                            'instruccion',
                            'direccion',
                            'telefono',
                            'provincia',
                            'distrito',
                            'empresa_trans',
                            'tipo_vehiculo',
                            'numero_placa',
                            'pasajeros',
                            'brevete',
                            'mayor_65',
                            'embarazo',
                            'cardiovascular',
                            'diabetes',
                            'hepatica',
                            'neurologica',
                            'inmunodeficiencia',
                            'renal',
                            'd_hepatico',
                            'pulmonar',
                            'cancer',
                            'ninguno' 
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
