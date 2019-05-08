<?php


header("Content-Type: image/jpeg");

$file = "wallpaper.jpg";

$wdt = 256;
$hgt = 256;

list($oldwdt, $oldhgt) = getimagesize($file);

$newImage = imagecreatetruecolor($wdt, $hgt);
$oldImage = imagecreatefromjpeg("wallpaper.jpg");

imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $wdt, $hgt, $oldwdt, $oldhgt);

imagejpeg($newImage);

imagedestroy($newImage);
imagedestroy($oldImage);