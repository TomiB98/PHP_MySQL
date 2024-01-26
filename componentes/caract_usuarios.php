<?php
if (isset($_POST['name'], $_POST['surname'], $_POST['date'])) {
    $nombre = $_POST['name'];
    $apellido = $_POST['surname'];
    $nacimiento = $_POST['date'];

    include("../clases/usuarios.php");
    $usuarios = new Usuarios($nombre, $apellido, $nacimiento);

    ob_start();
    $usuarios->imprime_carcteristicas();

    $usuarioOutput = ob_get_clean();

    session_start();
    $_SESSION['usuarios'][] = $usuarioOutput;

    header("Location: ../unidad6.php");

} else {
    echo "No hay datos del usuario cargados.";
}
?>