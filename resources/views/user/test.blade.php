<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/tables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/helper.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
</head>
<body class="content-main">
    @include('nav-principal.nav-user')
    <div class="next-nav content-second">
        @foreach ($tratamientos as $tratamiento)
            <h1><a class="link" href="{{ url("/test/{$tratamiento->id}")}}">Test de {{$tratamiento->nombre}}</a></h1>
        @endforeach
    </div>

</body>
</html>
