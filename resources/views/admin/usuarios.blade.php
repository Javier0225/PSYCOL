<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/tables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/helper.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
</head >
<body class="content-main">
    <div>
        @include('nav-principal.nav-admin')
    </div>
    <div>
    <h2>Usuarios</h2>
    <table>
        <thead>
            <tr>
                <td>Nombre</td><td>Apellidos</td><td>Fecha de nacimiento</td><td></td><td></td><td></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->nombre}}</td><td>{{$usuario->apellidos}}</td><td>{{$usuario->fecha_nacimiento}}</td>
                    <td><a class="link-table" href="{{ url('/admin/usuarios/tratamientos', ['id'=>$usuario->usuario_id]) }}">Mostrar tratamientos</a></td>
                    <td><a class="link-table" href="{{ url('/admin/usuarios/eliminar', ['id'=>$usuario->usuario_id]) }}">Eliminar usuario</a></td>
                    <td><a class="link-table" href="{{ url('/admin/usuarios/editar', ['id'=>$usuario->usuario_id]) }}">Editar datos usuario</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <a class="link-table buttom-create " href="{{ url('/registro') }}">Crear usuario</a>
    </div>
</body>
</html>
