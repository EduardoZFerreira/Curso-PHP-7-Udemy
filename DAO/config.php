<?php

spl_autoload_register(function($classname){
    $file = "Class" . DIRECTORY_SEPARATOR . $classname . ".class.php";
    if(file_exists($file))
        require_once($file);
});