
<!DOCTYPE html>
<html lang="es">
<head>
	<title>PsiCol | Registro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=decive-width, user-scalable=yes, initial-scale=1.0, maximum-scale=0.3, minimum-scale=1.0">
	<script src="https://kit.fontawesome.com/d87c2754d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('css/helper.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
</head>
<body class="main-content">
    <div id="separador"></div>
	<form method="POST" class="formulario" action="{{route('crearUsuario')}}">
        <h2>Registrate</h2>
        @csrf
		<div class="contenedor">
			<div class="input-contenedor">
				<i class="fas fa-address-book icon"></i>
				<input type="text" placeholder="Nombre" name="nombre">
			</div>

			<div class="input-contenedor ">
				<i class="fas fa-at icon"></i>
				<input type="text" placeholder="Apellidos" name="apellidos">
			</div>

			<div class="input-contenedor ">
				<i class="fas fa-user-lock icon"></i>
				<input type="text" placeholder="Correo electronico" name="email">
            </div>
            <div class="input-contenedor ">
				<i class="fas fa-user-lock icon"></i>
				<input type="password" placeholder="Contraseña" name="contra">
            </div>
            <div class="input-contenedor ">
				<i class="fas fa-user-lock icon"></i>
				<input type="DATE" placeholder="Fecha de nacimiento" name="fecha">
            </div>
            <h3>Datos acudiente</h3>
            <div class="input-contenedor ">
				<i class="fas fa-user-lock icon"></i>
				<input type="text" placeholder="Nombre" name="nombre_a">
            </div>
            <div class="input-contenedor ">
				<i class="fas fa-user-lock icon"></i>
				<input type="text" placeholder="Apellidos" name="apellidos_a">
            </div>
            <div class="input-contenedor ">
				<i class="fas fa-user-lock icon"></i>
				<input type="text" placeholder="Correo" name="email_a">
            </div>
            <div class="input-contenedor ">
				<i class="fas fa-user-lock icon"></i>
				<input type="text" placeholder="Paretesco" name="parentezco">
			</div>
			<input type="submit" value="Confirmar" class="button">
			<p>Registrate para tener mas seguimiento en la pagina, ademas de poder realizar nuestro test.</p>
			<p>¿Ya estas registrado? <a class="link" href="{{ url('/login') }}">Inicia Sesión</a></p>

		</div>
	</form>

</body>
</html>
