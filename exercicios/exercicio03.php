<?php

/*
03)​ Crie uma função que recebe dois parâmetros, base e expoente, e retorne a base elevada ao expoente. 
*/

function calc($base, $expo){
    $aux = $base;
    for($i = 1; $i < $expo; $i++){
        echo "Indice => ", $i, "<br>";
        $base *= $aux;
        echo "Base => ", $base, "<br>";
    }
    return "Resultado => " . $base;
}

echo calc(2, 10);


?>