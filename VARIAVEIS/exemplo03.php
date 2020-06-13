<?php

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

//////////////////////////////////////////
//array tipo composto

$frutas = array("abacaxi", "laranja", "manga", "banana");
echo $frutas[2];

echo "<br/>";
//////////////////////////////////////////////////
//TIPO OBJETO

$nascimento = new DateTime(); 
//var_dump($nascimento);
echo "<br/>";
//////////////////////////////////////////
//ler arquivo no pc

$arquivo = fopen("exemplo02.php", "r");
//var_dump($arquivo);

$nulo = NULL;
$vazio = "";
?>