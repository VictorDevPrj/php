<?php

class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($l, $n, $c){
        $this->logradouro = $l;
        $this->numero = $n;
        $this->cidade = $c;
    }

    public function __destruct(){
        //var_dump("DESTRUIR");
    }

    public function __toString() {
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }

}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "1234", "Santos");

var_dump($meuEndereco);

echo "<br>";

echo $meuEndereco;


?>