<?php

require_once("config.php");

$users = new Usuario();

$list = $users->GetAll();

$headers = array();

foreach ($list[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}


$file = fopen("usuarios.csv", "w+");


fwrite($file, implode(",", $headers) . "\r\n");

foreach ($list as $row) {
    $data = array();
    foreach ($row as $key => $value) {
        array_push($data, $value);
    }
    fwrite($file, implode(",", $data) . "\r\n");
}

fclose($file);