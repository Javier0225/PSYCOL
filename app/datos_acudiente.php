<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos_acudiente extends Model

{
    protected $fillable = ['nombre','apellidos', 'correo','parentezco', 'usuario_id'];
    function usuario(){
        return $this->belongsTo(App\Usuario::class);
    }
}
