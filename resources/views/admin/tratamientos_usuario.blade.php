<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Usuarios | Tratamientos</title>
    <link rel="stylesheet" href="{{ asset('css/tables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/helper.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
</head >
<body class="content-main">
<body>
    @include('nav-principal.nav-admin')
    <table>
        <thead>
            <tr>
                <td>Nombre tratamiento</td><td></td>
            </tr>
        </thead>
        <tbody>
    @foreach ($tratamientos_u as $trata_u)
        <tr>
            <td>{{$tratamientos[$bucle]->nombre}}</td><td><a class="link-table" href="{{ url('/admin/usuarios/tratamiento', ['id_tratamiento'=>$trata_u->id]) }}">Visualizar tratamiento</a></td>
            <?php$bucle++?>
        </tr>
    @endforeach
</tbody>
    </table>
</body>
</html>
