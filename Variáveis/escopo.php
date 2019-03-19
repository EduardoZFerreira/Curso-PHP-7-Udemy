<?php

$nome = "Eduardo";

function Teste()
{
    global $nome;
    echo $nome;
}

function Teste2()
{
    $nome = "????";
    echo "\nTeste 2: " . $nome;
}

Teste();

Teste2();