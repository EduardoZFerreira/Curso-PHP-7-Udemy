<?php

$a = 36; 
$b = 35;

/* 1º maior retorna 1
 * Igualdade retorna 0
 * 2º maior retorna -1
*/
var_dump($a <=> $b);

echo "<br>";

$c = NULL;
$d = NULL;
$e = 'Not null';

echo $c ?? $d ?? $e;