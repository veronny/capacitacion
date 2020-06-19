<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['dni', 'nombre', 'apellido_paterno','apellido_materno','user_id', 'question_id','opcion1','opcion2','opcion3','opcion4','opcion5','opcion6','opcion7','opcion8','opcion9','opcion10'];

   
    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id')->withTrashed();
    }

    public function scopeDni($query, $dni )
    {
        if($dni)
            return $query->where('dni','LIKE',"%$dni%");
    }
        
    public function scopeFicha($query, $ficha )
    {
        if($ficha)
            return $query->where('user_id','LIKE',"%$ficha%");
    }

    public function scopeApellido($query, $apellido )
    {
        if($apellido)
            return $query->where('apellido_paterno','LIKE',"%$apellido%");
    }


}
