<?php

function error_handler($code, $message, $file, $line)
{
    echo json_encode(array(
        "Message"=>$message,
        "Line"=>$line,
        "Code"=>$code,
        "File"=>$file
    ));
}


set_error_handler("error_handler");


echo 100 / 0;