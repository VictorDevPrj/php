<?php

/*
07) ​Uma das vantagens da programação é a automatização de tarefas que não gostamos de realizar. 
Dito isto, elabore uma função cujo objetivo é resolver a fórmula de Bhaskara. 
Para isso, sua função deve receber três parâmetros, “ax2”, “bx” e “c”, 
de tal modo que na equação: 3x² - 5x + 12 os valores seriam respectivamente: 3, -5, 12. 
Como retorno deve ser passado um vetor que tem 2 valores um para cada possível resultado, 
mesmo que os resultados sejam iguais. Caso o delta seja negativo, retorne, ao invés do vetor, 
um string com a frase: “Delta é negativo”. 
*/

function dt($ax2, $bx, $c){
    return pow($bx, 2) -4 * $ax2 * $c;
}

function validaDelta($a, $b, $c){
    $valDelta = dt($a, $b, $c);
    return $valDelta <= -1 ? false : true;
}

function bhaskara($a, $b, $c) {
    $raiz = sqrt(dt($a, $b, $c));
    echo "Raiz => " . $raiz . "<br>";

    $xMais = (-($b) + $raiz) / 2 * $a;
    echo "X mais => " . $xMais . "<br>";

    $xMenos =  (-($b) - $raiz) / 2 * $a;
    echo "X menos => " . $xMenos . "<br>";

    $resultado = array($xMais, $xMenos);
    print_r ($resultado);
}

function exibir($a, $b, $c){
    $d = validaDelta($a, $b, $c);

    if($d == true){
        bhaskara($a, $b, $c);
    }else {
        echo "Delta Negativo";
    }

}
exibir(1, 1, 1);
?>