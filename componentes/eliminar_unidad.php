<?php
include('conexion.php');

$id = $_GET['c'];

mysqli_query($conexionDB, "DELETE FROM clases WHERE id_clase = '$id'");

header("Location: ../unidad1.php")
?>