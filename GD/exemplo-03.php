<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);

$gray = imagecolorallocate($image, 100, 100, 100);

$font1 = "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf";
$font2 = "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf";

imagettftext($image, 32, 0, 450, 150, $titleColor, $font1, "CERTIFICADO");
imagettftext($image, 32, 0, 440, 350, $titleColor, $font2, "Divanei Aparecido");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em ") . date("d/m/Y"), $titleColor);


header("Content-Type: image/jpeg");

imagejpeg($image);

imagedestroy($image);