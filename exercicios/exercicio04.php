<?php
/*
04) ​Crie uma função que irá receber dois valores, o dividendo e o divisor. 
A função deverá imprimir o resultado e o resto da divisão destes dois valores. 
*/

function calc($a, $b){
    $div = $a / $b;
    $resto = $a % $b;

    return  "Divisão => " . $div . "<br>" .
            "Resto da divisão => " . $resto;
}

echo calc(6, 4);

?>