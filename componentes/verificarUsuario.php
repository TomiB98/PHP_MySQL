<?php
include('../clases/base_datos.php');
include('../clases/users.php');
include('conexion_clases.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$user = new Users($base);

$usu = $user->log_In($_POST['email'], $_POST['password']);

if($usu) {
    header("Location: ../unidad8.php?logIn_exitoso");
} else {
    header("Location: ../unidad8.php?pass_error");
}
?>