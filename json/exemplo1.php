<?php

$pessoa = array();

array_push($pessoa, array(
    'nome'=>'João',
    'idade'=>20
));

array_push($pessoa, array(
    'nome'=>'Victor',
    'idade'=>25
));

echo json_encode($pessoa);

?>