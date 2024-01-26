<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
</head>

<body>

	<div class="container">
		<header>
			<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>


			<nav>
				<?php include("botonera.php"); ?>
			</nav>
		</header>
		<section>
			<h2>Usuarios</h2>

			<form class="formCaptcha" action="componentes/caract_usuarios.php" method="POST">
				<input class="imputFormCaptcha" type="text" placeholder="Nombre" name="name" required maxlength="30">
				<input class="imputFormCaptcha" type="text" placeholder="Apellido" name="surname" required maxlength="50">
				<input class="imputFormCaptcha" type="date" name="date" required>

				<div class="submitComentario">
					<input class="submitUnidad1" type="submit" value="Cargar">
				</div>
			</form>

		</section>
		<aside>

			<div class="usuarios">
				<?php
				 if (isset($_SESSION['usuarios'])) {
					 foreach ($_SESSION['usuarios'] as $usuarioOutput) {
						 echo $usuarioOutput;
					 }
				 } else {
					echo "No hay datos del usuario cargados.";
				}
				?>
			</div>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>