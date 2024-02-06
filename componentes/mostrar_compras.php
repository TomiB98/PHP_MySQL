<?php
include_once('clases/base_datos.php');
include_once('clases/carrito.php');
include_once('conexion_clases.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$comp = new Carrito($base);

$mostrar_compras = $comp->listar_compra();
?>