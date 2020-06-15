<?php
// CRIAR PASTA E EXCLUIR 
$name = "images";

if (!is_dir($name)){
    mkdir($name);  //CRIAR PASTA
    echo "Diretório criado com sucesso....";
} else {
    rmdir($name); // remove diretorio
    echo "Já existe o diretório: $name";
}

?>
