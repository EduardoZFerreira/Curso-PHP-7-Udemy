<?php

require_once "config.php";

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status())
{
    CASE PHP_SESSION_DISABLED:
        echo "Sessões desabilitadas";
        break;
    CASE PHP_SESSION_NONE:
        echo "Sessões habilitadas, porém nenhuma iniciada";
        break;
    CASE PHP_SESSION_ACTIVE:
        echo "Sessões habilitadas, e existe uma sessão";
        break;
}