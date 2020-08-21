<?php

namespace App\Http\Controllers;

use Ansiedad as GlobalAnsiedad;
use App\Tratamiento;
use Illuminate\Http\Request;
use App\Ansiedad;
use App\Bipolaridad;
use App\datos_acudiente;
use App\datos_usuario;
use App\Depresion;
use App\Limite;
use App\Mail\MailActividades;
use App\Tratamientos_Usuario;
use Illuminate\Support\Facades\Mail;

class TratamientoController extends Controller
{
    function redireccionarTratamiento($id){
        $tratamiento = Tratamiento::where('id', $id)->first();

    }
    function ansiedad(){
        if(request()->session()->exists('id_user')){
            $puntos = 0;
            for($i = 1; $i<13; $i++){
                if(request()->input('pregunta'.$i) == 'Si'){
                    $puntos ++;
                }

            }


            if($puntos >=7){
                $id = request()->session()->get('id_user');
                $tratamiento = new Ansiedad();
                $tratamiento_Con = $tratamiento->tratamiento();
                $ansiedad = Tratamiento::where('nombre','ansiedad')->first();
                $tratamiento_usuario = Tratamientos_Usuario::create([
                    "usuario_id" => $id,
                    "tratamiento_id"=>$ansiedad->id,
                    "tratamiento"=>$tratamiento_Con,
                    "fecha_inicio"=>date('Y-m-d')
                ]);
                return view('user.init', ['event'=>$tratamiento_Con]);
            }else{
                return view('user.ndiagnosticado');
            }
        }

    }
    function depresion(){
        if(request()->session()->exists('id_user')){
            $puntos = 0;
            for($i = 1; $i<13; $i++){
                if(request()->input('pregunta'.$i) == 'Si'){
                    $puntos ++;
                }

            }


            if($puntos >=7){
                $id = request()->session()->get('id_user');
                $tratamiento = new Depresion();
                $tratamiento_Con = $tratamiento->tratamiento();
                $ansiedad = Tratamiento::where('nombre','depresion')->first();
                $tratamiento_usuario = Tratamientos_Usuario::create([
                    "usuario_id" => $id,
                    "tratamiento_id"=>$ansiedad->id,
                    "tratamiento"=>$tratamiento_Con,
                    "fecha_inicio"=>date('Y-m-d')
                ]);
                return view('user.init', ['event'=>$tratamiento_Con]);
            }else{
                return view('user.ndiagnosticado');
            }
        }

    }
    function bipolaridad(){
        if(request()->session()->exists('id_user')){
            $puntos = 0;
            for($i = 1; $i<12; $i++){
                if(request()->input('pregunta'.$i) == 'Si'){
                    $puntos ++;
                }

            }


            if($puntos >=7){
                $id = request()->session()->get('id_user');
                $tratamiento = new Bipolaridad();
                $tratamiento_Con = $tratamiento->tratamiento();
                $ansiedad = Tratamiento::where('nombre','bipolaridad')->first();
                $tratamiento_usuario = Tratamientos_Usuario::create([
                    "usuario_id" => $id,
                    "tratamiento_id"=>$ansiedad->id,
                    "tratamiento"=>$tratamiento_Con,
                    "fecha_inicio"=>date('Y-m-d')
                ]);
                return view('user.init', ['event'=>$tratamiento_Con]);
            }else{
                view('user.ndiagnosticado');
            }
        }
    }
    function limite(){
        if(request()->session()->exists('id_user')){
            $puntos = 0;
            for($i = 1; $i<12; $i++){
                if(request()->input('pregunta'.$i) == 'Si'){
                    $puntos ++;
                }

            }


            if($puntos >=7){
                $id = request()->session()->get('id_user');
                $tratamiento = new Limite();
                $tratamiento_Con = $tratamiento->tratamiento();
                $ansiedad = Tratamiento::where('nombre','bipolaridad')->first();
                $tratamiento_usuario = Tratamientos_Usuario::create([
                    "usuario_id" => $id,
                    "tratamiento_id"=>$ansiedad->id,
                    "tratamiento"=>$tratamiento_Con,
                    "fecha_inicio"=>date('Y-m-d')
                ]);
                return view('user.init', ['event'=>$tratamiento_Con]);
            }else{
                return view('user.ndiagnosticado');
            }
        }
    }

    function obtenerTratamientos(){
        if(request()->session()->exists('id_user')){
            $tratamientos = Tratamientos_Usuario::where('usuario_id', request()->session()->get('id_user'));
            $tratamiento_Completos = Tratamiento::all();
            return view('user.tratamientos',["tratamientos"=>$tratamientos->get(), 'tramiento_Com'=>$tratamiento_Completos]);
        }
    }
    function obtenerCalendario($id){
        if(request()->session()->exists('id_user')){
            $tratamiento  = Tratamientos_Usuario::where('tratamiento_id',$id)->first();
            return view('calendario.calendario', ['event'=>$tratamiento->tratamiento]);

        }
    }
    function obtener_Actividades($id){
        if(request()->session()->exists('id_user')){
            $tratamiento  = Tratamientos_Usuario::where('tratamiento_id',$id)->first();
            $tratamiento = json_decode($tratamiento->tratamiento);
            $actividades_hoy = [];
            foreach($tratamiento as $fila){
                if(strtotime($fila->start) ==  strtotime(date('Y-m-d'))){
                    array_push($actividades_hoy, $fila);
                }
            }
            return view('calendario.actividades', ['actividades'=>$actividades_hoy, 'tratamiento_id'=>$id]);

        }
    }
    function actividad_realizada($id_tratamiento, $id_actividad){
        $tratamientos = Tratamientos_Usuario::where('tratamiento_id',$id_tratamiento)->first();
        $actividades = json_decode($tratamientos['tratamiento']);
        $accion = '';
        foreach($actividades as $actividad){
            if($actividad->id == $id_actividad){
                $actividad->realizado = true;
                $accion = $actividad->title;
            }
        }

        $actividades_hoy = [];
        foreach($actividades as $fila){
            if(strtotime($fila->start) ==  strtotime(date('Y-m-d'))){
                array_push($actividades_hoy, $fila);
            }
        }
        $tratamientos->tratamiento = json_encode($actividades);
        $tratamientos->save();
        $usuario = datos_usuario::where('id', request()->session()->get('id_user'))->first();
        //Mensaje
        $msgs = [
            'Asunto'=> 'PDT registro novedad',
            'Persona'=>$usuario->nombre. ''. $usuario->apellidos,
            'Actividad' => $accion,
            'Fecha' => date('Y-m-d'),

        ];
        Mail::to(datos_acudiente::where('usuario_id', request()->session()->get('id_user'))->first()->correo)
        ->send(new MailActividades($msgs));
        return view('calendario.actividades',['actividades'=>$actividades_hoy, 'tratamiento_id'=>$id_tratamiento]);
    }
}
