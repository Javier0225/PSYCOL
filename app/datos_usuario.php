<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos_usuario extends Model
{
    protected $fillable = ['nombre','apellidos','fecha_nacimiento','usuario_id'];
    function usuario(){
        return $this->belongsTo(App\Usuario::class);
    }
}
