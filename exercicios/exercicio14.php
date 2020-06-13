<?php

/*
14) ​Crie uma estrutura condicional switch que receba uma string com o nome de uma fruta e que possua três casos: 
Caso maçã, retorne no console: “Não vendemos esta fruta aqui”. 
Caso kiwi, retorne: “Estamos com escassez de kiwis”. 
Caso melancia, retorne: “Aqui está, são 3 reais o quilo”. 
Teste com estas três opções .
Crie também um default, que retornará uma mensagem de erro no console. 
*/

$fruta = "laranja";
$opc = 0;

if($fruta == "maçã"){
    $opc = 0;
}else if($fruta == "kiwi"){
    $opc = 1;
}else if($fruta == "melancia"){
    $opc = 2;
}else{
    $opc = 9999;
}

switch ($opc) {

    case 0:
        echo "Não vendemos esta fruta aqui";
    break;

    case 1:
        echo "Estamos com escassez de kiwis";
    break;

    case 2:
        echo "Aqui está, são 3 reais o quilo";
    break;

    default:
        echo "Opção invalida!!!";
    break;
}
?>