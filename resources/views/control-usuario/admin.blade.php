<!DOCTYPE html>
<html lang="es">
<head>
	<title>PsiCol | Inicio Sesion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=decive-width, user-scalable=yes, initial-scale=1.0, maximum-scale=0.3, minimum-scale=1.0">
	<script src="https://kit.fontawesome.com/d87c2754d1.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
	<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <div id="separador"></div>
	<form class="formulario" method="POST" action="{{ route('comprobar_Admin') }}">
        <h1>Inicia Sesión</h1>
        @csrf

		<div class="contenedor">

			<div class="input-contenedor ">
				<i class="fas fa-portrait icon"></i>
				<input type="text" name="usuario" placeholder="Usuario">
			</div>

			<div class="input-contenedor ">
				<i class="fas fa-key icon"></i>
				<input type="password" name="contra" placeholder="Contraseña">
			</div>


			<input type="submit" value="Confirmar" class="button">

		</div>
	</form>
</body>
</html>
