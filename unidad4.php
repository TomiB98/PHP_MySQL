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
			<?php //include('componentes/thumbnail.php') 
			?>
			<div class="submitComentario">
				<a href="imagenes/River.jpg" data-lightbox="image-1" data-title="Imagen aumentada!"><img class="thumbnail" src="imagenes/thumb.jpg"></a>
			</div>

			<h3>• Carga imágenes BD:</h3>

			<div class="contFormImg">
				<form class="formComentario" action="componentes/cargar_imagenDB.php" method="POST" enctype="multipart/form-data">
					<div class="imputsUnidad3">
						<label><strong>Cargue su Imagen(jpg, gif, png)(Max Size: 195kb):</strong></label>
						<input class="imputComentario" type="file" name="imagen" required>
						<input class="imputComentario" type="text" placeholder="Nombre de la imagen" name="name" required maxlength="30">
					</div>
					<textarea class="imputComentarioText" type="text" placeholder="Descripcion de la imagen" name="description" required maxlength="50"></textarea>
					<div class="submitComentario">
						<input class="submitUnidad1" type="submit" value="Guardar">
					</div>
				</form>
			</div>

			<?php
			if (isset($_GET['error_formato'])) {
				echo "<p>La imagen no tiene el formato pedido. Debe ser <strong> .jpg, .gif o .png</strong></p>";
			}
			if (isset($_GET['error_peso'])) {
				echo "<p>La imagen no tiene el peso pedido. Debe ser menor <strong> 195XB </strong></p>";
			}
			if (isset($_GET['ok'])) {
				echo "<p>La imagen se cargo correctamente</p>";
			}
			?>

		</section>
		<aside>

			<h3># Imagenes en la DB:</h3>

			<?php
			include('componentes/conexion.php');

			$consulta = mysqli_query($conexionDB, "SELECT * FROM imagenes");

			while ($listar_recetas = mysqli_fetch_assoc($consulta)) {
			?>

				<div class="fotoDB">
					<a href="componentes/imagen_DB.php?id=<?php echo $listar_recetas['id_imagen'] ?>" data-lightbox="image-2" data-title="<?php echo $listar_recetas['descripcion_img'] ?>"><img class="fotoDBmini" src="componentes/imagen_DB.php?id=<?php echo $listar_recetas['id_imagen'] ?>"></a>
					<p><strong><?php echo $listar_recetas['nombre_img'] ?></strong></p>
				</div>

			<?php } ?>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
	<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
</body>

</html>