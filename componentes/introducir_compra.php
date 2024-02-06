<?php
include('../clases/base_datos.php');
include('../clases/carrito.php');
include('conexion_clases.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$comp = new Carrito($base);

$comp->introducir_compra($_POST['codigo'], $_POST['producto'], $_POST['descripcion'], $_POST['precio']);

header("Location: ../unidad7.php?compra_cargada");
?>