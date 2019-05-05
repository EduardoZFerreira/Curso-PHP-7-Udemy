<?php

$name ="Images";

if(!is_dir($name))
{
    mkdir($name);
    echo "O diretório {$name} foi criado";
} 
else
{
    rmdir($name);
    echo "O diretório {$name} já existe! O diretório foi removido";
}