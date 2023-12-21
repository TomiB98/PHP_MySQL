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
			<h2>Agenda de clases</h2>

			<form class="formUnidad1" action="componentes/insertar_clases.php" method="POST">
				<div>
					<input class="imputUnidad1" type="text" placeholder="Unidad" name="unidad" required maxlength="30">
					<input class="imputUnidad1" type="date" name="fecha">
				</div>
				<input class="submitUnidad1" type="submit" value="Guardar">
			</form>

			<?php
			if (isset($_GET['ok'])) {
				echo '<h4>Unidad cargada!</h4>';
			}
			?>

		</section>
		<aside>

			<h1>Lista de unidades!</h1>

			<?php
			include('componentes/ver_clases.php');

			while ($listaUnidades = mysqli_fetch_assoc($data)) {
			?>

				<div class="unidadFecha">
					<p><a class="btnBorrar" href="componentes/eliminar_unidad.php?c=<?php echo $listaUnidades['id_clase'] ?>">x</a></p>
					<p><span class="destacado">• Unidad:</span> <?php echo $listaUnidades['unidad'] ?></p>
					<p><span class="destacado">• Fecha:</span> <?php echo $listaUnidades['fecha'] ?></p>
				</div>

			<?php } ?>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>