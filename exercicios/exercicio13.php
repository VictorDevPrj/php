<?php

/*
13)Crie um programa que exibe se um dia é dia útil, 
fim de semana ou dia inválido dado o número referente ao dia. 
Considere que domingo é o dia 1 e sábado é o dia 7. 
Utilize a estrutura Switch. 
*/

$diasDaSemana = 3;

switch ($diasDaSemana) {

    case 0:
        echo "Domingo";
    break;

    case 1:
        echo "Segunda-feira";
    break;

    case 2:
        echo "Terça-feira";
    break;

    case 3:
        echo "Quarta-feira";
    break;

    case 4:
        echo "Quinta-feira";
    break;

    case 5:
        echo "Sexta-feira";
    break;

    case 6:
        echo "Sábado";
    break;

    default:
        echo "Data invalida";
    break;
    
}


?>