<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
	<style>
		#signup-section {
			display: none;
		}
	</style>
	<script>
		function mostrarSignup() {
			document.getElementById('login-section').style.display = 'none';
			document.getElementById('signup-section').style.display = 'block';
		}
	</script>
</head>

<body>

	<div class="container">
		<header>
			<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>


			<nav>
				<?php include("botonera.php"); ?>
			</nav>
		</header>
		<section id="login-section">
			<h2>Registro</h2>

			<h3>Log in</h3>

			<form class="formCaptcha" action="componentes/verificarUsuario.php" method="POST">
				<input class="imputFormCaptcha" type="email" placeholder="Email" name="email" required maxlength="100">
				<input class="imputFormCaptcha" type="password" placeholder="Contraseña" name="password" required maxlength="10">
				<div class="submitComentario">
					<input class="submitUnidad1" type="submit" value="Enviar">
				</div>
			</form>

			<a class="toSignUp" href="#" onclick="mostrarSignup()">New user? Sign up here!</a>

			<?php
			if (isset($_GET['logIn_exitoso'])) {
				echo '<h4>LogIn exitoso!</h4>';
			}
			if (isset($_GET['pass_error'])) {
				echo '<h4>Email o contraseña incorrecta!</h4>';
			}
			?>
			<?php
			if (isset($_GET['usuario_creado'])) {
				echo '<h4>Usuario creado correctamente!</h4>';
			}
			?>

		</section>

		<section id="signup-section">
			<h2>Registro</h2>

			<h3>Sign up</h3>

			<form class="formCaptcha" action="componentes/cargarusUario.php" method="POST">
				<input class="imputFormCaptcha" type="email" placeholder="Email" name="email" required maxlength="100">
				<input class="imputFormCaptcha" type="password" placeholder="Contraseña" name="password" required minlength="4" maxlength="10">
				<!-- <input class="imputFormCaptcha" type="text" placeholder="Repetir Contraseña" name="password" id="password2" required maxlength="30"> -->
				<div class="submitComentario">
					<input class="submitUnidad1" type="submit" value="Enviar">
				</div>
			</form>

		</section>
		<aside>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>