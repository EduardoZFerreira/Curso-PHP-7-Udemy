<?php

function TrataNome($name)
{
    if(!$name)
    {
        throw new Exception("Nenhum nome foi informado <br>", 1);
    }
    echo ucfirst($name) . "<br>";
}

try 
{
    TrataNome("Joao");
    TrataNome("");
} 
catch (Exception $e) 
{
    echo $e->getMessage();
}
finally
{
    echo "Executou o bloco try";
}