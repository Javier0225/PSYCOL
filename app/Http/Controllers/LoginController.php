<?php

namespace App\Http\Controllers;

use App\Tratamiento;
use App\Usuario;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    function store(){
        request()->validate(
            [
                'correo' => 'required|email',
                'contra' => 'required'
            ]
        );
        $user = Usuario::where('correo', request()->input('correo'))->first();
        if(isset($user)){
            if(password_verify(request()->input('contra'),$user->contra)){
                request()->session()->put('id_user', $user->id);
                return view('user.init')->with('nombre', $user->datos_usuario()->first()->nombre);
            }else{
                echo "no";
            }
        }
    }
    function comprobar_Admin(){
        if(request()->input('usuario') == 'mudkip' && request()->input('contra') == 'astro'){
            request()->session()->put('admin','logueado');
            return view('admin.init');
        }
    }
}
