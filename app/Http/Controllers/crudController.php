<?php

namespace App\Http\Controllers;

use App\datos_acudiente;
use App\datos_usuario;
use App\Usuario;
use Illuminate\Http\Request;

class crudController extends Controller
{
    function actualizar_usuario($id){
        $usuario = Usuario::where('id',$id)->first();
        $usuario_datos = datos_usuario::where('usuario_id',$id)->first();
        $usuario_acudiente = datos_acudiente::where('usuario_id',$id)->first();
        return view('admin.actualizar',['usuario'=>$usuario,'usuario_datos'=>$usuario_datos,'usuario_acudiente'=>$usuario_acudiente]);
    }
    function comprobar_actualizacion($id){
        $usuario = Usuario::where('id',$id)->first();
        $usuario->correo = request()->input('email');
        $usuario->save();

        $usuario_datos = datos_usuario::where('usuario_id',$id)->first();
        $usuario_datos->nombre = request()->input('nombre');
        $usuario_datos->apellidos = request()->input('apellidos');
        $usuario_datos->fecha_Nacimiento = request()->input('fecha');
        $usuario_datos->save();

        $usuario_acudiente = datos_acudiente::where('usuario_id',$id)->first();
        $usuario_acudiente->nombre = request()->input('nombre_a');
        $usuario_acudiente->apellidos = request()->input('apellidos_a');
        $usuario_acudiente->correo = request()->input('email_a');
        $usuario_acudiente->parentezco = request()->input('parentezco');
        $usuario_acudiente->save();

        return redirect('/admin/usuarios');
    }
    function eliminar_usuario($id){
        $usuario = Usuario::where('id',$id)->first();
        $usuario->delete();
        return redirect('/admin/usuarios');
    }
}
