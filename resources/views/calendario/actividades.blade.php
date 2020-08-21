<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario | Tratamiento | Actividades hoy</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/tables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/helper.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
</head>
<body class="content-main">
    @include('nav-principal.nav-user')
    <div class="next-nav">
        <table>
            <thead>
                <tr>
                    <td>Actividad</td> <td></td>
                </tr>
            </thead>
            <tbody>


                @foreach ($actividades as $actividad)
                        <tr class="{{$actividad->realizado ? 'realizado' : ''}}">
                            <td class="{{$actividad->realizado ? 'realizado' : ''}}"><h2>{{$actividad->title}}</h2></td>
                            @if (!$actividad->realizado)
                                <td><a class="link-table" href="{{ url('/user/tratamientos/actividades', ["tratamiento_id"=>$tratamiento_id, "actividad_id"=>$actividad->id]) }}">Por Realizar</a></td>
                            @else
                                <td class="link-table">Realizado</td>
                            @endif

                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
