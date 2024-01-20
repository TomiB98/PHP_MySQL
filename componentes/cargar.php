<?php
session_start();
$nombre = $_POST['name'];
$apellido = $_POST['surname'];
$email = $_POST['email'];
$consulta = $_POST['cons'];
$clave = $_POST['code'];

if ($clave == $_SESSION['captcha']) {
    include('conexion.php');

    mysqli_query($conexionDB, "INSERT INTO consultas VALUES (DEFAULT, '$nombre', '$apellido', '$email', '$consulta')");

    header("Location: ../unidad5.php?captcha_correcto");
} else {
    header("Location: ../unidad5.php?captcha_incorrecto");
}
?>