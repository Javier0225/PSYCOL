<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Mail\ComentarioMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class comentarioController extends Controller
{
    function comprobarMensaje(){
        $comentario = Comentario::create([
            'correo'=>request()->input('correo'),
            'remitente'=>request()->input('nombre'),
            'mensaje'=>request()->input('mensaje'),
        ]);


        return redirect('/');
    }
    function eliminar_comentario($id){
        $comentario = Comentario::destroy($id);
        return redirect('/admin/comentarios');
    }
    function comprobar_mensaje($id){
        $comentario = Comentario::where('id', $id)->first();

        return view('admin.enviar_comentario', ['comentario'=> $comentario]);
    }
    function enviar_mensaje($id){
        $comentario = Comentario::where('id', $id)->first();
        $mensaje = [
            "remitente" => 'PDT',
            "correo remitente" => 'jeortiz19@misena.edu.co',
            "cuerpo mensaje"=>request()->input('mensaje'),
        ];
        Mail::to($comentario->correo)->send(new ComentarioMailable($mensaje));
        return redirect('/admin/comentarios');
    }
}
