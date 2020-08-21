@extends('nav-principal.nav')
@section('lista')
    <li><a href="{{ url('/init') }}">Inicio</a></li>
    <li><a href="{{ url('/user/test') }}"> Test</a></li>
    <li><a href="{{ url('/user/tratamientos') }}">Tratamientos</a> </li>
    <li><a href="">Cerrar sesión</a></li>
@endsection
