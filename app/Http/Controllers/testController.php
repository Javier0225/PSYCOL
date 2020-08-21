<?php

namespace App\Http\Controllers;

use App\Tratamiento;
use App\Tratamientos_Usuario;
use Illuminate\Http\Request;

class testController extends Controller
{
    function mostrar_test(){
        if(request()->session()->exists('id_user')){
            $tratamientos = Tratamiento::all();

            return view('user.test',['tratamientos' => $tratamientos]);
        }
    }
    function mostrar_seleccion($id){
        $tratamiento = Tratamiento::where('id', $id)->first();
        return view("tratamientos.$tratamiento->nombre");
    }
}
