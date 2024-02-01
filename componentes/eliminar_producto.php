<?php
include('../clases/base_datos.php');
include('../clases/producto.php');
include('conexion_clases.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$prod = new Producto($base);

$prod->eliminar_producto($_GET['codigo']);
header("Location: ../unidad7.php?prodElim_correctamente")
?>