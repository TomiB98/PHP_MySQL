<?php
include('clases/base_datos.php');
include('clases/producto.php');
include('conexion_clases.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$prod = new Producto($base);

$prod -> insertar_productos($_POST['prod'], $_POST['desc'], $_POST['pre'])
?>