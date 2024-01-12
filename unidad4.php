<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
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
			<h2>Imágenes con PHP</h2>

			<h3>• Marca de agua:</h3>
			<div class="submitComentario">
				<img class="marcaAgua" src="componentes/marca_de_agua.php">
			</div>

			<h3>• Imágenes dinámicas:</h3>
			<div class="imgDinamic">
				<img src="componentes/imagen_dinamica_jpeg.php">
				<img src="componentes/imagen_dinamica_png.php">
				<img src="componentes/imagen_dinamica_pngtxt.php">
			</div>

			<h3>• Thumbnail:</h3>
			<?php //include('componentes/thumbnail.php') ?>
			<div class="submitComentario">
				<a href="imagenes/River.jpg" data-lightbox="image-1" data-title="Imagen aumentada!"><img class="thumbnail" src="imagenes/thumb.jpg"></a>
			</div>

		</section>
		<aside>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
	<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
</body>

</html>