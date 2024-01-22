<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script>
		function onSubmit(token) {
			document.getElementById("demo-form").submit();
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
		<section>
			<h2>Consultas</h2>

			<h3>• Captcha:</h3>

			<?php
			function contenido_captcha()
			{
				$pattern = "1234567890abcdefghijklmnopqrstuvwxyz#$%?ABCDEFGHIJKLMNOPQRSTUVWXYZ";
				$clave = "";
				for ($i = 0; $i < 8; $i++) {
					$clave .= $pattern[rand(0, 65)];
				}
				return $clave;
			}
			$_SESSION['captcha'] = contenido_captcha();
			?>

			<form class="formCaptcha" action="componentes/cargar.php" method="POST">
				<input class="imputFormCaptcha" type="text" placeholder="Nombre" name="name" required maxlength="30">
				<input class="imputFormCaptcha" type="text" placeholder="Apellido" name="surname" required maxlength="50">
				<input class="imputFormCaptcha" type="email" placeholder="Email" name="email" required maxlength="50">
				<textarea class="imputCaptchaText" type="text" placeholder="Consulta" name="cons" required maxlength="255"></textarea>
				<div class="submitCaptcha">
					<img src="componentes/imagen_captcha.php">
					<input class="imputCaptcha" type="text" placeholder="Captcha" name="code" required>
				</div>
				<div class="submitComentario">
					<input class="submitUnidad1" type="submit" value="Enviar">
				</div>
			</form>

			<?php
			if (isset($_GET['captcha_correcto'])) {
				echo '<h4>Consulta Enviada!</h4>';
			}
			if (isset($_GET['captcha_incorrecto'])) {
				echo '<h4>Captcha incorrecto!</h4>';
			}
			?>

			<h3>• ReCaptcha v2:</h3>

			<form class="formCaptcha" action="componentes/cargar.php" method="POST">
				<input class="imputFormCaptcha" type="text" placeholder="Nombre" name="name" required maxlength="30">
				<input class="imputFormCaptcha" type="text" placeholder="Apellido" name="surname" required maxlength="50">
				<input class="imputFormCaptcha" type="email" placeholder="Email" name="email" required maxlength="50">
				<textarea class="imputCaptchaText" type="text" placeholder="Consulta" name="cons" required maxlength="255"></textarea>

				<div class="g-recaptcha" data-sitekey="6LfSv1gpAAAAAAgC2RFy6KQMR2UyAVyLiY0EQkFj"></div>

				<div class="submitComentario">
					<input class="submitUnidad1" type="submit" value="Enviar">
				</div>
			</form>

			<h3>• ReCaptcha v3:</h3>

			<form class="formCaptcha" action="componentes/cargar.php" method="POST">
				<input class="imputFormCaptcha" type="text" placeholder="Nombre" name="name" required maxlength="30">
				<input class="imputFormCaptcha" type="text" placeholder="Apellido" name="surname" required maxlength="50">
				<input class="imputFormCaptcha" type="email" placeholder="Email" name="email" required maxlength="50">
				<textarea class="imputCaptchaText" type="text" placeholder="Consulta" name="cons" required maxlength="255"></textarea>

				<button class="g-recaptcha" data-sitekey="6LcBxlgpAAAAANQAOi5fIAtxK3mZ6xk0qsTH35nB" data-callback='onSubmit' data-action='submit'>Submit</button>

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