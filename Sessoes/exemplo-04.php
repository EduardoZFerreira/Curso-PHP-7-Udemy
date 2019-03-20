<?php

session_id('cd2bpnjhbednf19uuk3rq0qla0array');

require_once "config.php";

session_regenerate_id();

echo session_id();


var_dump($_SESSION);