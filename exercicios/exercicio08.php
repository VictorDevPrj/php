<?php

/*  
    08) ​Pedro joga N jogos de basquete por temporada. 
Para saber como está ele está progredindo, ele mantém registro de todos os as pontuações feitas por jogo. 
Após cada jogo ele anota no novo valor e confere se o mesmo é maior ou menor que seu melhor e pior desempenho. 
Dada uma lista string = “pontuação1 pontuação2 pontuação3 etc..”, 
escreva uma função que ao recebê-la irá comparar os valores um a um e irá retornar um vetor com o número de 
vezes que ele bateu seu recorde de maior número de pontos e quando fez seu pior jogo. 
(Número do pior jogo). 

*/

$jogadas = array();

$jogadas[0] = 90;
$jogadas[1] = 70;
$jogadas[2] = 67;
$jogadas[3] = 23;
$jogadas[4] = 60;
$jogadas[5] = 18;
$jogadas[6] = 19;
$jogadas[7] = 15;
$jogadas[8] = 20;
$jogadas[9] = 23;
$jogadas[10] = 120;

function caderno($jogadas){
    $maior = $jogadas[0];
    $menor = $jogadas[0];
    
    foreach($jogadas as $index => $jogada){

        if($jogada > $maior){
            echo "Jogada -> " . $jogada . " Maior --> " . $maior . "<br>";
            $maior = $jogada;
        }

        if($jogada < $menor){
            echo "Jogada -> " . $jogada . " Menor --> " . $menor . "<br>";
            $menor = $jogada;
        }
    
    }

    return  "Melhor jogada --> ".$maior."<br>".
            "Pior jogada --> ".$menor."<br>";
}

echo caderno($jogadas);

print_r($jogadas);

?>