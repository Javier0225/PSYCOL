<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Usuario | Tratamiento | Actividades</title>
    <link rel="stylesheet" href="{{ asset('css/tables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/helper.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
</head >
<body class="content-main">
    @include('nav-principal.nav-admin')
    <?php $bucle = 0 ?>
    <table>
        <thead>
            <tr>
                <td>Actividad</td><td>Fecha de realizacion</td>
            </tr>
        </thead>
        <tbody>


                @foreach ($tratamiento->tratamiento as $actividades)
                    <tr>
                        <td>{{$actividades->title}}</td><td>{{$actividades->start}}</td>
                        @if (!$actividades->realizado)
                            <td><a class="link-table" href="{{url("/admin/usuarios/tratamiento",['id_tratamiento'=>$tratamiento->id,'id_actividad' => $actividades->id])}}">Enviar mensaje</a></td>
                        @else
                            <td><h2 class="link-table">Realizado</h2></td>
                        @endif

                    </tr>
                @endforeach

            <?php $bucle++?>

        </tbody>
    </table>
</body>
</html>
