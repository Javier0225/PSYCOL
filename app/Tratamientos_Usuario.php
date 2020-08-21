<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tratamientos_Usuario extends Model
{
    protected $fillable = ['fecha_inicio','usuario_id', 'tratamiento_id','tratamiento'];
    function usuario(){
        return $this->belongsTo(App\Usuario::class);
    }
    function tratamiento(){
        return $this->belongsTo(App\Tratamiento::class);
    }
}
