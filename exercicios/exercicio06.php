<?php

/*
06)​ Elabore duas funções que recebem três parâmetros: capital inicial, taxa de juros e tempo de aplicação. 
A primeira função retornará o montante da aplicação financeira sob o regime de juros simples e a segunda 
retornará o valor da aplicação sob o regime de juros compostos.  
 
*/

function jSimples($cpInicial, $txJuros, $tApl){
    $aux = $cpInicial * $txJuros;
    for($i = 0; $i < $tApl; $i++){
        $cpInicial += $aux;
    }
    return $cpInicial;
}

function jComposto($cpInicial, $txJuros, $tApl){
    for($i = 0; $i < $tApl; $i++){
        $cpInicial += ($cpInicial * $txJuros);
    }
    return $cpInicial;
}

echo jSimples(100, 0.5, 2);
echo "<br>";
echo jComposto(100, 0.25, 2);


?>