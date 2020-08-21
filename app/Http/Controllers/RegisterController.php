<?php

namespace App\Http\Controllers;

use App\datos_acudiente;
use App\datos_usuario;
use App\Usuario;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function crearUsuario(){
        $usuario = Usuario::create([

            'correo'=>request()->input('email'),
            'contra'=>password_hash(request()->input('contra'),PASSWORD_DEFAULT),
        ]);
        $datos_personales = datos_usuario::create([
            'nombre'=>request()->input('nombre'),
            'apellidos'=>request()->input('apellidos'),
            'fecha_nacimiento'=>request()->input('fecha'),
            'usuario_id'=>$usuario->id,
        ]);

        $datos_acudiente = datos_acudiente::create([
            'nombre'=>request()->input('nombre_a'),
            'apellidos'=>request()->input('apellidos'),
            'correo'=>request()->input('email_a'),
            'parentezco'=>request()->input('parentezco'),
            'usuario_id'=>$usuario->id,
        ]);

        return view('index');
    }
}
