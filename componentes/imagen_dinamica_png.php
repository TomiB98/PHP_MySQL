<?php
header('Content-type: image/png');
$img = imagecreate(200, 200);
$fondo = imagecolorallocate($img, 0, 200, 0);
$negro = imagecolorallocate($img, 0, 0, 0);
$rojo = imagecolorallocate($img, 255, 0, 0);
$azul = imagecolorallocate($img, 0, 0, 255);
$equinas = array(20, 100, 100, 180, 180, 100, 100, 20);
imagepolygon($img, $equinas, 4, $negro);
imagearc($img, 100, 100, 80, 80, 0, 360, $rojo);
imagearc($img, 100, 100, 80, 50, 0, 360, $azul);
imagepng($img);
imagedestroy($img);
?>