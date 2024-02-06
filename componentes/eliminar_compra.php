<?php
include('../clases/base_datos.php');
include('../clases/carrito.php');
include('conexion_clases.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$comp = new Carrito($base);

$comp->eliminar_compra($_GET['id']);

header("Location: ../unidad7.php?compra_eliminada");
?>