<?php

$fn = function($a)
{
    var_dump($a);
};


function test($callback, $data)
{
    $callback($data);
}

test($fn, "oi, isso é um parâmetro para o callback");