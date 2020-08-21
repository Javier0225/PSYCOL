<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Comentarios | Responder</title>
    <link rel="stylesheet" href="{{ asset('css/envio_respuesta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/helper.css') }}">
</head >
<body class="content-main">
    @include('nav-principal.nav-admin')
    <aside>
        <h4><span>Remitente:</span> {{$comentario->remitente}}</h4>
        <h4><span>Correo destino:</span> {{$comentario ->correo}}</h4>
        <h4><span>Mensaje:</span> {{$comentario->mensaje}}</h4>
        <form action="{{ route('enviar_mensaje', ['id'=>$comentario->id]) }}" method="GET">
            <textarea class="input-text" name="mensaje" id="" cols="30" rows="10"></textarea>
            <input class="send" type="submit" value="Enviar mensaje">
        </form>
    </aside>
</body>
</html>
