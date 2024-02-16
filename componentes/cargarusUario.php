<?php
$password = password_hash($_POST['password'], PASSWORD_DEFAULT, array('const'=>4));
$email = $_POST['email'];

include('../clases/base_datos.php');
include('../clases/users.php');
include('conexion_clases.php');

$base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
$user = new Users($base);

$user->sign_Up($email, $password);

header("Location: ../unidad8.php?usuario_creado")
?>