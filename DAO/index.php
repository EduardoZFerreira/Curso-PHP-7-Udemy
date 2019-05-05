<?php

require_once("config.php");

//$root = new Usuario();
//$root->GetById(4);
//echo $root;

//$lista = Usuario::GetAll();

//echo json_encode($lista);

//$search = Usuario::Search("rr");

//echo json_encode($search);

//$usuario = new Usuario();

//$usuario->Login("jose", "1234567890");

//echo $usuario;

$aluno = new Usuario("novoaluno", "@alunonovo");
$aluno->Insert();

echo $aluno;