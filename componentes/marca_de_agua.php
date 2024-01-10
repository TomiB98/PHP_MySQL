<?php
$image = "../imagenes/unidad4.jpg";
$marca_agua = "../imagenes/marca.png";

$img = imagecreatefrompng($marca_agua);
$ext = substr($image, -3);
$ext = strtolower($ext);

switch ($ext) {
    case 'gif':
        $img2 = imagecreatefromgif($image);
        break;

    case 'jpg':
        $img2 = imagecreatefromjpeg($image);
        break;

    case 'png':
        $img2 = imagecreatefrompng($image);
        break;
}

// Se obtiene las dimensiones de las imágenes
$marca_agua_width = imagesx($img);
$marca_agua_height = imagesy($img);
$image_width = imagesx($img2);
$image_height = imagesy($img2);

// Se ajusta la marca de agua al 50% del tamaño original
$new_width = $marca_agua_width * 0.5;
$new_height = $marca_agua_height * 0.5;

// Crear una versión redimensionada de la marca de agua
$marca_agua_resized = imagecreatetruecolor($new_width, $new_height);
imagealphablending($marca_agua_resized, false);
imagesavealpha($marca_agua_resized, true);
imagecopyresampled($marca_agua_resized, $img, 0, 0, 0, 0, $new_width, $new_height, $marca_agua_width, $marca_agua_height);

// Ubicar la marca de agua en la esquina inferior derecha
$padding = 10;
$pos_x = $image_width - $new_width - $padding;
$pos_y = $image_height - $new_height - $padding;

// Colocar la marca de agua redimensionada en la imagen principal
imagecopy($img2, $marca_agua_resized, $pos_x, $pos_y, 0, 0, $new_width, $new_height);

header("Content-type: image/jpeg");
imagejpeg($img2);
imagedestroy($img);
imagedestroy($img2);
imagedestroy($marca_agua_resized);
?>