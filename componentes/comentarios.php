<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
$nombreApellido = $_POST['name&surname'];
$email = $_POST['email'];
$comentario = $_POST['comment'];
$fecha = date('d-m-Y');
$hora = date('H:i');

//$data = '<strong>'.'• Usuario: '.'</strong>'.$nombreApellido.'<br/>'.'<b>'.'• Email: '.'</b>'.$email.'<br/>'.'<b>'.'• Comentario: '.'</b>'.'<br/>'.$comentario.'<br/>'.'<b>'.'- Fue realizado el dia '.$fecha.' a las '.$hora.' -'.'</b>'.'<br/>'.'<br/>';
$data = '<strong>'.'• Usuario: '.'</strong>'.$nombreApellido.' - '.$email.'<br/>'.'<b>'.'• Comentario: '.'</b>'.'<br/>'.$comentario.'<br/>'.'<b>'.'- Fue realizado el dia '.$fecha.' a las '.$hora.' -'.'</b>';

$file = fopen("comentarios.txt", "a"); //Lo agrega al final
fputs($file, $data . PHP_EOL);

header("Location: ../unidad3.php?ok")
?>