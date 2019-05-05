<?php

require_once("config.php");

$root = new Usuario();

$root->GetById(4);

echo $root;