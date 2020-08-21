<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Comentarios</title>
    <link rel="stylesheet" href="{{ asset('css/tables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    @include('nav-principal.nav-admin')
    <h2>Comentarios enviados</h2>

    <table>
        <thead>
            <tr>
                <td>Nombre</td><td>Correo </td><td>Mensaje</td><td>Fecha de envio</td>
            </tr>
        </thead>
        <tbody>

                @foreach ($comentarios as $comentario)
                    <tr>
                        <td>{{$comentario->remitente}}</td><td>{{$comentario->correo}}</td>
                        <td>{{$comentario->mensaje}}</td><td>{{$comentario->created_at}}</td>
                        <td><a class="link-table" href="{{ url("admin/eliminar_comentario/$comentario->id") }}">Eliminar</a></td>
                        <td><a class="link-table" href="{{ url("admin/comprobar_mensaje/$comentario->id")}}">Responder mensaje</a></td>
                    </tr>
                @endforeach

        </tbody>
    </table>
</body>
</html>
