<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'index')->name('index');
Route::view('/info', 'info');

Route::view('/login', 'control-usuario.login')->name('login');
Route::view('/registro', 'control-usuario.registro')->name('registro');
Route::view('/ansiedad','trastornos.ansiedad')->name('i_ansiedad');

Route::post('/ComprobarLogin','LoginController@store')->name('comprobar_Login');
Route::view('/init', 'user.init')->name('init');


Route::post('/CrearUsuario', 'RegisterController@crearUsuario')->name('crearUsuario');

Route::view('/calendario', 'calendario.calendario')->name('calendario');
Route::get('/user/tratamientos/actividades/{id_tratamiento}','TratamientoController@obtener_Actividades');
Route::get('/user/tratamientos/actividades/{id_tratamiento}/{id_actividad}',"TratamientoController@actividad_realizada");
Route::get('/tratamiento/{id}', 'TratamientoController@redireccionarTratamiento');

Route::post('/ansiedad_form', 'TratamientoController@ansiedad')->name('form_Ansiedad');
Route::post('/depresion_form', 'TratamientoController@depresion')->name('form_Depresion');
Route::post('/bipolaridad_form', 'TratamientoController@bipolaridad')->name('form_Bipolaridad');
Route::post('/limite_form', 'TratamientoController@limite')->name('form_Limite');
Route::view('/formularios/ansiedad', 'tratamientos.ansiedad')->name('ansiedad');

Route::get('/test/{id}','testController@mostrar_seleccion');
Route::get('/user/tratamientos','tratamientoController@obtenerTratamientos');
Route::get('/user/test','testController@mostrar_test');

Route::get('/user/tratamientos/{id}', 'tratamientoController@obtenerCalendario');

Route::post('/enviar_form','comentarioController@comprobarMensaje')->name('comentario');



Route::view('/admin','control-usuario.admin');
Route::post('/admin', 'LoginController@comprobar_Admin')->name('comprobar_Admin');

Route::view('/admin/init', 'admin.init');
Route::get('/admin/usuarios', 'adminController@usuarios')->name('usuarios');
Route::get('/admin/comentarios','adminController@mensajes')->name('comentarios');

Route::get('/admin/usuarios/editar/{id}', 'crudController@actualizar_usuario');
Route::get('/admin/usuarios/eliminar/{id}', 'crudController@eliminar_usuario');
Route::post('/admin/usuarios/actualizar/comprobar/{id}','crudController@comprobar_actualizacion')->name('actualizar_usuario');

Route::get('/admin/eliminar_comentario/{id}','comentarioController@eliminar_comentario')->name('eliminar_comentario');
Route::get('/admin/comprobar_mensaje/{id}','comentarioController@comprobar_mensaje')->name('redirigir_envio');
Route::get('/admin/enviar_mensaje/exito/{id}','comentarioController@enviar_mensaje')->name('enviar_mensaje');

Route::get('/admin/usuarios/tratamientos/{id}', 'usuariosController@mostrarTratamientos')->name('adminMostrarTratamientos');
Route::get('/admin/usuarios/tratamiento/{id}', 'usuariosController@visualizarTratamiento')->name('adminMostrarTratamiento');
Route::get('/admin/usuarios/tratamiento/{id_tratamiento}/{id_actividad}', 'usuariosController@enviarCorreo')->name('adminMostrarTratamiento');
