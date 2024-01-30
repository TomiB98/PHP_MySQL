<?php
include_once('clases/base_datos.php');
include_once('clases/producto.php');
include_once('conexion_clases.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$prod = new Producto($base);

$mostrar_productos = $prod->listar_productos();
?>