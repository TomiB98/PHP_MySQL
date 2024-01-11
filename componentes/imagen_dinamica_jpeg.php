<?php
header('Content-type: image/jpeg');
$img = imagecreate(200, 200);
$fondo = imagecolorallocate($img, 0, 0, 200);
$amarillo = imagecolorallocate($img, 255, 255, 0);
$fondo_amarillo = imagecolorallocate($img, 255, 255, 105);
imagerectangle($img, 10, 10, 190, 190, $amarillo);
imagefilledrectangle($img, 20, 20, 180, 180, $fondo_amarillo);
imagefill($img, 0, 0, $fondo);
imagejpeg($img);
imagedestroy($img);
?>