<?php

$json = '[
    {
      "nome": "João",
      "idade": 20
    },
    {
      "nome": "Victor",
      "idade": 25
    }
   ]';

  $data = json_decode($json, true);

  var_dump($data);

?>

