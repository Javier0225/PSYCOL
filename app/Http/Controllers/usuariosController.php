<?php

namespace App\Http\Controllers;

use App\datos_acudiente;
use App\datos_usuario;
use App\Mail\MailAcudiente;
use App\Tratamiento;
use App\Tratamientos_Usuario;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class usuariosController extends Controller
{
    function mostrarTratamientos($id){
        $tratamientos_u = Tratamientos_Usuario::where('usuario_id',$id)->get();
        $tratamientos = Tratamiento::all();
        $bucle=0;
        return view('admin.tratamientos_usuario', ["tratamientos_u"=>$tratamientos_u,"tratamientos"=>$tratamientos,"bucle"=>$bucle]);
    }
    function visualizarTratamiento($id){
        $tratamiento = Tratamientos_Usuario::where('id',$id)->first();
        $trata = json_decode($tratamiento->tratamiento);

        $tratamiento->tratamiento = $trata;
        return view('admin.tratamiento', ["tratamiento"=>$tratamiento]);
    }
    function enviarCorreo($id_tratamiento, $id_actividad){
        $tratamiento = Tratamientos_Usuario::where('id', $id_tratamiento)->first();

        $tratamiento_acti = json_decode($tratamiento->tratamiento);

        $datos_acudiente = datos_acudiente::where('usuario_id',$tratamiento->usuario_id )->first();
        $personales = datos_usuario::where('usuario_id', $tratamiento->usuario_id)->first();
        $mensaje = [
            "Nombre"=> $personales->nombre . " ". $personales->apellidos,
            "Actividad"=> $tratamiento_acti[$id_actividad -1 ]->title,
            "Fecha"=>$tratamiento_acti[$id_actividad - 1]->start,
            "Asunto"=>'No ha realizado la actividad hasta la fecha',
        ];
        Mail::to($datos_acudiente->correo)->send(new MailAcudiente($mensaje));
        return redirect('/admin/usuarios');
    }
}
