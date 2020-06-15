<?php

$nome = "Pedro";

function teste(){
	global $nome; //Usa --> (global) variavel definida fora  do escopo
	
	echo $nome;
}

function teste2(){
	echo $nome, "agora no teste2";
}


teste();
teste2();
?>