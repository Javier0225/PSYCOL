<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\datos_usuario;

class Usuario extends Model
{
    protected $fillable = ['correo', 'contra'];
    function tratamientos(){
        return $this->hasManyThrough(App\Tratamiento_Usuario::class,App\Tratamiento::class);
    }

    function datos_acudiente(){
        return $this->hasOne(App\datos_acudiente::class);
    }

    function datos_usuario(){
        return $this->hasOne(datos_usuario::class);
    }
}
