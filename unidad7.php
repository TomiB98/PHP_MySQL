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

			<h2>Productos</h2>

			<?php
			include('componentes/listar_prod.php');
			$mostrar_productos
			?>

			<table>
				<tr>
					<th class="listaProdTitle">Codigo</th>
					<th class="listaProdTitle">Nombre</th>
					<th class="listaProdTitle">Descripción</th>
					<th class="listaProdTitle">Precio</th>
				</tr>

				<?php
				for ($i = 0; $i < count($mostrar_productos); $i++) {
				?>
					<form action="" method="POST">
						<tr>
							<td class="listaProd"><input type="hidden" name="codigo" value="<?php echo $mostrar_productos[$i]['codigo']; ?>"><?php echo $mostrar_productos[$i]['codigo']; ?></td>
							<td class="listaProd"><input type="hidden" name="producto" value="<?php echo $mostrar_productos[$i]['producto']; ?>"><?php echo $mostrar_productos[$i]['producto']; ?></td>
							<td class="listaProd"><input type="hidden" name="descripcion" value="<?php echo $mostrar_productos[$i]['descripcion']; ?>"><?php echo $mostrar_productos[$i]['descripcion']; ?></td>
							<td class="listaProd"><input type="hidden" name="precio" value="<?php echo $mostrar_productos[$i]['precio']; ?>"><?php echo $mostrar_productos[$i]['precio']; ?>$</td>
							<td class="btnsProd">
								<button type="submit" class="submitUnidad1">Add to<br>🛒</button>
								<button type="submit" class="submitUnidad1">Modify<br>⚙️</button>
							</td>
						</tr>
					</form>
				<?php } ?>

			</table>

			<h2>Nuevo Producto</h2>

			<form class="newProd" action="componentes/insertar_productos.php" method="POST">
				<input name="prod" type="text" placeholder="Nombre" required maxlength="30">
				<textarea name="desc" id="" cols="0" rows="5" placeholder="Descripcion del producto" required maxlength="255"></textarea>
				<input name="pre" type="number" step="0.01" placeholder="Precio" pattern="^\d{1,8}(\.\d{1,2})?$">
				<div class="submitComentario">
					<button type="submit" class="submitUnidad1">Cargar<br>📥</button>
				</div>
			</form>

			<?php
			if(isset($_GET['carga_correcta'])) {
				echo "<h4>Producto cargado correctamente!</h4>";
			}
			?>

		</section>
		<aside>

			<h2>Carrito</h2>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>