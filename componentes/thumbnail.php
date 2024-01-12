<?php
$imagePath = "imagenes/River.jpg";

if (file_exists($imagePath)) {
    $src_img = imagecreatefromjpeg($imagePath);
    // rest of your code...
} else {
    echo "Image file not found.";
}

if (!$src_img) {
    die('Error loading image file.');
}

//$src_img = imagecreatefromjpeg("../imagenes/River.jpg");
$new_width = imagesx($src_img)/5;
$new_heigth = imagesy($src_img)/5;

$dst_img = imagecreatetruecolor($new_width, $new_heigth);
$image = imagecreatetruecolor($new_width, $new_heigth);
imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, $new_width, $new_heigth, imagesx($src_img), imagesy($src_img));
imagejpeg($dst_img, "imagenes/thumb.jpg");

imagedestroy($dst_img);
?>