<?php

namespace Cliente;

class Cadastro extends \Cadastro {
    public function registrarVenda() {
        echo "Venda realizada".$this->getNome();
    }
}

?>