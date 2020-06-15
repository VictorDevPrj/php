<?php

/*

01)​ Crie uma função que dado dois valores (passados como parâmetros) 
mostre no console a soma, subtração, multiplicação e divisão desses valores. 
 
*/

function calculadora($a, $b){
    $soma = $a + $b;
    $sub = $a - $b;
    $mult = $a * $b;
    $div = $a / $b;
    
    
    return  "Soma => " . $soma . "<br>" .
            "Sub => " . $sub . "<br>" .
            "Multiplicação => " . $mult . "<br>" .
            "Divisão => " . $div;
}
$t = calculadora(3, 50);
echo $t;

?>