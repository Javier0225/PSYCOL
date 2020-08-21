<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\datos_usuario;
use App\Usuario;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function usuarios(){
        $usuario = datos_usuario::all();
        return view('admin.usuarios',['usuarios'=>$usuario]);
    }

    function mensajes(){
        $comentarios = Comentario::all();
        return view('admin.comentarios',['comentarios'=>$comentarios]);
    }
}
