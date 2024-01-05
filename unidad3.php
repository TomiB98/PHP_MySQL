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
			<h2>Comentarios</h2>

			<?php
			$file2 = fopen("componentes/comentarios.txt", "r") or die('El archivo no se puede abrir, intentelo mas tarde.');
			$vector = file("componentes/comentarios.txt");
			$contador = count($vector);

			for ($i = $contador - 1; $i >= 0; $i--) {
				echo '<div class="comentariosCont">' . $vector[$i] . '</div>';
			};

			//fpassthru($file2);
			fclose($file2);
			?>

		</section>
		<aside>

			<form class="formComentario" action="componentes/comentarios.php" method="POST">
				<div class="imputsUnidad3">
					<input class="imputComentario" type="text" placeholder="Nombre y Apellido" name="name&surname" required>
					<input class="imputUnidad1" type="email" placeholder="Email" name="email" required>
				</div>
				<textarea class="imputComentarioText" type="text" placeholder="Comentario" name="comment" required></textarea>
				<div class="submitComentario">
					<input class="submitUnidad1" type="submit" value="Guardar">
				</div>
			</form>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>