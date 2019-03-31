<?php 

function teste($callback)
{
    $callback();
}

teste(function()
{
    echo "Procedimento encerrado";
});