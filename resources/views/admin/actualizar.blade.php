<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Usuarios | Actualizar</title>
    <script src="https://kit.fontawesome.com/d87c2754d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('css/helper.css')}}">
</head>
<body class="content-main">
    <div id="separador"></div>
	<form method='POST'class="formulario" action="{{ route('actualizar_usuario', ['id'=>$usuario->id]) }}">
        <h2>Actualizar datos</h2>
        @csrf
		<div class="contenedor">
			<div class="input-contenedor">
				<input type="text" placeholder="Nombre" name="nombre" value="{{$usuario_datos->nombre}}">
			</div>

			<div class="input-contenedor ">
				<input type="text" placeholder="Apellidos" name="apellidos" value="{{$usuario_datos->apellidos}}">
			</div>

			<div class="input-contenedor ">
				<input type="email" placeholder="Correo electronico" name="email" value="{{$usuario->correo}}">
            </div>
            <div class="input-contenedor ">
				<input type="date" placeholder="Fecha de nacimiento" name="fecha" value="{{$usuario_datos->fecha_nacimiento}}">
            </div>
            <h3>Datos acudiente</h3>
            <div class="input-contenedor ">
				<input type="text" placeholder="Nombre" name="nombre_a" value="{{$usuario_acudiente->nombre}}">
            </div>
            <div class="input-contenedor ">
				<input type="text" placeholder="Apellidos" name="apellidos_a" value="{{$usuario_acudiente->apellidos}}">
            </div>
            <div class="input-contenedor ">
				<input type="text" placeholder="Correo" name="email_a" value="{{$usuario_acudiente->correo}}">
            </div>
            <div class="input-contenedor ">
				<input type="text" placeholder="Paretesco" name="parentezco" value="{{$usuario_acudiente->parentezco}}">
			</div>
			<input type="submit" value="Actualizar" class="button">

		</div>
	</form>

</body>

</html>
