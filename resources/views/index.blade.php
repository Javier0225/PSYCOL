<!DOCTYPE html>
<html lang="es">
<head>
	<title>PsiCol | Inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--Estilos CSS, FONTS-->
	<link rel="stylesheet" href="css/index.css">
	<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
</head>
<body>
	<!--Stairway to heaven-->
	<div class="stairway-to-heaven">
		<span ><i class="fas fa-angle-double-up"></i></span>
	</div>
	<!--Stairway to heaven-->


	<!--Menu De Navegacion-->
	<header id="header">


		<nav class="menu">

			<div class="logo-box">
				<h1><a href="#">PsiCol</a></h1>
				<span class="btn-menu"><i class="fab fa-battle-net"></i></span>
			</div>

			<div class="list-container">
				<ul  class="lists">
					<li><a href="{{ url('/') }}" class="activo">Inicio</a></li>
					<li><a href="{{ url('/info') }}" >Informacion</a></li>
					<li><a href="#acerca-de" >Nosotros</a></li>
                    <li><a href="#footer" >Contactenos</a></li>
                    <li><a href="{{url('/registro')}}">Registrarse</a></li>
                    <li><a href="{{ url('/login') }}">Inicio sesion</a></li>
				</ul>
			</div>

		</nav>
		<!--Img HEADER-->
		<div class="img-header" id='img-header'>
			<div class="welcome">
				<h1>Bienvenido a PsiCol</h1>
				<hr>
				<p>Pagina informativa sobre Trastornos Psicologicos</p>

			</div>
		</div>

		<div class="skew-abajo"></div>


	</header>
	<!--Menu De Navegacion-->
	<main  id='acerca-de'>
		<!--Acerca de nosotros-->
		<section class="acerca-de">
			<div class="info-container">
				<h1>Acerca de Nosotros</h1>
				<p>La psicología o sicología es una ciencia social y una disciplina académica enfocadas en el análisis y la comprensión de la conducta humana y de los procesos mentales experimentados por individuos y por grupos sociales durante momentos y situaciones determinadas.</p>
				<p>Nuestra pagina se encarga mas que nada enfocandose en los trastornos que dichos grupos padecen, en este caso otorgandoles informacion a los usuarios que deseen saber mas sobre este, y conocer posibles soluciones a dicho trastorno.</p>

				<div class="about-gallery">
						<img src="Imgs/tras-01.jpg">
						<img src="Imgs/tras-02.jpg">
						<img src="Imgs/tras-03.jpg">
				</div>


				<div class="about-more"><a href="{{ url('/info') }}"><button>Leer mas</button></a></div>
			</div>

		</section>

		<!--Proyecto-->
		<section class="our-projects">

			<div class="deg-background"></div>

			<div class="ejeZproject">
				<div class="container-project">

					<div class="project-title">
						<h2>Proposito de la Página</h2>
						<hr>
					</div>

					<div class="inf-project"><p> Es el de Informar a la comunidad de trastornos que para la mayoria es desconocido, tanto de sus origenes, como de indicios que la persona esta sufriendo; hablando psicologicamente.</p></div>

					<div class="project-imgs">
						<img src="Imgs/IMG-01.jpg">
						<img src="Imgs/IMG-03.jpg">
						<img src="Imgs/IMG-04.jpg">
						<img src="Imgs/IMG-05.jpg">
						<img src="Imgs/IMG-06.jpg">
					</div>


				</div>
			</div>
		</section>
</main>

<!-- FOOTER -->
<footer class="footer" id='footer'>

	<div class="deg-footer"></div>

	<div class="ejeZfooter">
		<div class="footer-content">
		<div class="footer-title">
			<h2>Contacto</h2>
			<hr>
		</div>

		<div class="form-content">
        <form id="form" action='{{ route('comentario') }}' method="POST">
            @csrf
			<label for="user">Nombre:</label>
			<input type="text" id="user" name="nombre" placeholder="Ingresa tu Nombre">

			<label for="email">Correo Electronico:</label>
			<input type="email" id="email" name="correo" placeholder="Ingresa tu Correo">

			<label for="menssage">Mensaje:</label>
			<textarea name="mensaje" id="menssage" placeholder='Escriba su mensaje'></textarea>

			<div class="send"><button>Enviar</button></div>

			<div class="mensaje-form">
				<p>Escribe tus dudas, inquietudes y sugerencias acerca de nuestra pagina</p>
			</div>

		</form>
		</div>

		<div class="footer-text">
			<p>&copy; PsiCol - 2020| Todo los derechos estan reservados a JJDD</p>
		</div>

		</div>
	</div>
</footer>

<!--Scripts-->
<script src="https://kit.fontawesome.com/d87c2754d1.js" crossorigin="anonymous"></script>
<script src="js/index.js"></script>

</body>
</html>
