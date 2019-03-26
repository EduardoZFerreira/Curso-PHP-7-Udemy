<?php

function Soma(int ...$valores) : string
{
    return array_sum($valores);
}


var_dump(Soma(2, 2));
echo "<br>";
