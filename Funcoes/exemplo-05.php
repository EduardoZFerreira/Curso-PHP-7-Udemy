<?php


$a = 10;

function TrocaValor(&$a)
{
    $a += 50;
    return $a;
}


echo TrocaValor($a);


echo "<br>";

echo $a;