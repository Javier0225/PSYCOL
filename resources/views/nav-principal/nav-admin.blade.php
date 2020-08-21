@extends('nav-principal.nav')

@section('lista')
    <li><a href="{{ url('/admin/init') }}">Inicio</a></li>
    <li><a href="{{ url('/admin/usuarios') }}">Usuarios</a></li>
    <li><a href="{{ url('/admin/comentarios') }}">Comentarios</a></li>
@endsection
