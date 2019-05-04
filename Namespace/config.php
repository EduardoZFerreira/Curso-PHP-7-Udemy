<?php

spl_autoload_register(function($classname){
    $class_dir = "Class";
    $filename = $class_dir . DIRECTORY_SEPARATOR . $classname . ".php";

    if(file_exists($filename))
    {
        require_once $filename;
    }
});