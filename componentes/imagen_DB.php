<?php
include('conexion.php');

$id = $_GET['id'];
$consultar_img = mysqli_query($conexionDB, "SELECT formato_img, imagen FROM imagenes WHERE id_imagen = $id");
$array_img = mysqli_fetch_row($consultar_img);

header("Content-type: $array_img[0]");
echo $array_img[1];
?>