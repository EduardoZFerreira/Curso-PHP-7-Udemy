<?php

$images = scandir("Images");

$data = array();

foreach ($images as $img) {
    if(!in_array($img, array(".", "..")))
    {
        $filename = "Images" . DIRECTORY_SEPARATOR . $img;        
        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y", filemtime($filename));
        $info["url"] = "http://localhost/Curso-PHP-7-Udemy/DIR/" . str_replace("\\", "/", $filename);
        array_push($data, $info);
    }
}

echo json_encode($data);