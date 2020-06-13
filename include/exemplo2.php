<?php

//include "exemplo1.php"; //possibilita url externa, caso nao encontre o arquivo ele busca no diretorio path do php

//require "exemplo1.php"; //exige que o arquivo exista e funcione corretamente se não ele para a execução

require_once "exemplo1.php"; //exige que o arquivo exista e funcione corretamente se não ele para a execução

$resultado = somar(10, 200);

echo $resultado;

?>