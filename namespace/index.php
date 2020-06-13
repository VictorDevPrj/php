<?php

require_once("config.php");
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Victor");
$cad->setEmail("victor@hotmail.com");
$cad->setSenha("4567");

$cad->registrarVenda();

?>