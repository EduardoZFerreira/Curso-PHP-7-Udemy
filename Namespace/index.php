<?php

    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad->setNome("Eduardo Ferreira");
    $cad->setEmail("eduardo.zekl@gmail.com");
    $cad->setSenha("senha@123");

    $cad->RegistrarVenda();