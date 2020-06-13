<?php

//$nome = $_GET["a"]; //o valor da variavel ["a"] esta vindo da url (GET ou POST)
$nome = (int)$_GET["a"]; //convertendo para inteiro
//var_dump($nome);
////////////////////////////////
//pegando IP DO USUARIO
//$ip = $_SERVER["REMOTE_ADDR"];

//echo $ip;



$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>