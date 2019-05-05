<?php

$filename = "Star.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$fileencode =  "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?=$fileencode?>" >Imagem: </a>

<img src="<?=$fileencode?>" alt="" />