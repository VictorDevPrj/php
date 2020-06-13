<?php

// &$nome_variavel --> passa endereco por referencia 

function ola($texto) {

    $argmuentos = func_get_arg();

    return $argmuentos;

}

$pessoa = array (
    'nome'=>'João',
    'idade'=>20
);

foreach ($pessoa as $value) {

    if(gettype($value) == 'integer') $value  += 10;
        echo $value . '<br>';

    echo $value . '<br>';

}

print_r($pessoa);


function soma(int ...$valores):string {
    return array_sum($valores);
}

echo "<br>";

echo var_dump(soma(23,3));
echo "<br>";
echo soma(3,3);
echo "<br>";
echo soma(2, 3, 2, 5, 3, 4);
echo "<br>";
?>
