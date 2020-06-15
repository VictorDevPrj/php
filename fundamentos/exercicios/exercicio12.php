<?php
/*
12)​ Faça um algoritmo que calcule o fatorial de um número. 
*/

function fatorial($num){
    $aux = 1;
    for($i = 1; $i <= $num; $i++){
        echo "Fatorial antes ==> " . $aux . " indice --> " . $i . "<br>";
        $aux *= $i;
        echo "Fatorial depois ==> " . $aux . " indice --> " . $i . "<br> <br>";
     }

}
fatorial(20);
?>