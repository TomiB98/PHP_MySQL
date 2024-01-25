<?php
include("clases/usuarios.php"); 
$usuarios = new Usuarios('Tomás', 'Baldi', '1998/03/18');
$usuarios->imprime_carcteristicas();
?>