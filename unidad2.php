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
			<h2>Eventos</h2>

			<?php
			$current_year = date('Y');
			$next_year = $current_year + 1;
			?>

			<form class="formFecha" action="componentes/calculo_fecha.php" method="POST">
				<input class="imputUnidad1" type="number" placeholder="Dia" name="day" min="1" max="31">
				<select class="imputUnidad1" name="month">
					<option value="1">Enero</option>
					<option value="2">Febrero</option>
					<option value="3">Marzo</option>
					<option value="4">Abril</option>
					<option value="5">Mayo</option>
					<option value="6">Junio</option>
					<option value="7">Julio</option>
					<option value="8">Agosto</option>
					<option value="9">Septiembre</option>
					<option value="10">Octubre</option>
					<option value="11">Noviembre</option>
					<option value="12">Diciembre</option>
				</select>
				<!-- <input class="imputFecha" type="number" placeholder="Mes" name="month" min="1" max="12"> -->
				<!-- <input class="imputFecha" type="number" placeholder="Año" name="year" min="2023" max="2050"> -->
				<select class="imputUnidad1" name="year">
					<option value="<?php echo $current_year ?>"><?php echo $current_year ?></option>
					<option value="<?php echo $next_year ?>"><?php echo $next_year ?></option>
				</select>
				<input class="submitFecha" type="submit" value="Calcular">
			</form>

		</section>
		<aside>

			<?php
			if (isset($_GET['vencido'])) {
				echo '<h5>¡Su turno se encuentra vencido, comuniquese para agendar uno nuevo!</h5>';
			}
			if (isset($_GET['dias'])) {
				if ($_GET['dias'] == 1) echo '<h5>¡Falta ' . $_GET['dias'] . ' dias para su turno!</h5>';
				else echo '<h5>¡Faltan ' . $_GET['dias'] . ' dias para su turno!</h5>';
			}
			?>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>