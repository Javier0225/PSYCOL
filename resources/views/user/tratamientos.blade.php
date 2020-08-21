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
    <div class='next-nav '>
        <table>
            <thead>
                <tr>
                    <td>Nombre</td><td></td><td></td>
                </tr>
            </thead>
            <tbody>

                @foreach ($tratamientos as $tratamiento)
                    <tr>
                        <td><h1>Tratamiento de {{$tramiento_Com[$tratamiento->tratamiento_id-1]->nombre}}</h1></td>
                        <td> <a class="link-table" href="{{ url("/user/tratamientos/{$tratamiento->tratamiento_id}") }}">Calendario</a></td>
                        <td> <a class="link-table"  href="{{url("/user/tratamientos/actividades/{$tratamiento->tratamiento_id}")}}">Actividades</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
