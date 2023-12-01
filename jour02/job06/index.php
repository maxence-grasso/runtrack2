<?php

$largeur = 20;
$hauteur = 10;

$canvas = imagecreatetruecolor(700, 700);
 
$white = imagecolorallocate($canvas, 255, 255, 255);

imagerectangle($canvas, 0, 0, $largeur, $hauteur, $white);
 
header('Content-Type: image/jpeg');
 
imagejpeg($canvas);
?>