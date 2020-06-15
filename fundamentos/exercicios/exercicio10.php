<?php

/*
10) ​Crie uma função que verifica se um número inteiro passado como parêmetro é divisível por 3 
e retorne true ou false. 
*/

function divisivel($num) {
    return $num % 3 == 0 ? "True" : "False";
}

echo divisivel(6);

?>