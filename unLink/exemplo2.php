<?php

if (!is_dir("images")) mkdir("images"); //verificar se existe a pasta (images) se nao existir cria a pasta

foreach (scandir("images") as $item) {  //scandir le um diretorio e transforma em um array
    if (!in_array($item, array(".", ".."))){
        
        unlink("images/" . $item);
        
    }
}

echo "ok";

?>