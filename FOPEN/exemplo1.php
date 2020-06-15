<?php

$file = fopen("log.txt", "a+");  //w+

fwrite($file, date("Y-m-d H:i:s") . "\n\n");

fclose($file);

echo "Arquivo criado com sucesso";

?>