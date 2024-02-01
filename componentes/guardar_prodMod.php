<?php
include('../clases/base_datos.php');
include('../clases/producto.php');
include('conexion_clases.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$prod = new Producto($base);

$prod->modificar_producto($_POST['codigo'], $_POST['producto'], $_POST['descrip'], $_POST['precio']);
header("Location: ../unidad7.php?modificado_correctamente")
?>