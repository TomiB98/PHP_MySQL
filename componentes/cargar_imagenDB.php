<?php
$nombreImg = $_POST['name'];
$descripcionImg = $_POST['description'];

$img_nombre = $_FILES['imagen']['name'];
$img_tipo = $_FILES['imagen']['type'];
$img_peso = $_FILES['imagen']['size'];
$img_tmp = $_FILES['imagen']['tmp_name'];

if ($img_tipo!='image/png' && $img_tipo!='image/gif' && $img_tipo!='image/jpeg') {
    header("Location: ../unidad4.php?$img_tipo");
} else if ($img_peso > 200000) {
    header("Location: ../unidad4.php?error_peso");
} else {
    include('conexion.php');

    $img = fopen($img_tmp, "r+");
    $cod_img = fread($img, $img_peso);
    $img_tabla = addslashes($cod_img);

    mysqli_query($conexionDB, "INSERT INTO imagenes VALUES (DEFAULT, '$nombreImg', '$descripcionImg', '$img_tabla', '$img_tipo')");
    header("Location: ../unidad4.php?ok");
}
?>