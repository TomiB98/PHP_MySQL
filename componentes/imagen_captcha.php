<?php
session_start();
header("Content-type: image/jpeg");
$img = imagecreate(120, 40);
$color_fondo = imagecolorallocate($img, 179, 217, 255);
$color_texto = imagecolorallocate($img, 61, 0, 153);
imagestring($img, 5, 20, 10, $_SESSION['captcha'], $color_texto);
imagejpeg($img);
?>