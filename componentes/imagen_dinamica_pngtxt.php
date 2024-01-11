<?php
header('Content-type: image/png');
$img = imagecreate(200, 140);
$t1 = 'Tomas Manuel Baldi';
$t2 = 'Web Developer Jr.';
$t3 = 'GitHub: TomiB98';
$t4 = 'tomasbaldi@gmail.com';

$fondo = imagecolorallocate($img, 0, 0, 100);
$texto = imagecolorallocate($img, 153, 204, 255);

imagestring($img, 5, 10, 20, $t1, $texto);
imagestring($img, 5, 10, 45, $t2, $texto);
imagestring($img, 5, 10, 70, $t3, $texto);
imagestring($img, 5, 10, 95, $t4, $texto);
imagepng($img);
imagedestroy($img);
?>