<?php

/* 

    O que é um objeto  é uma variavel que representa uma classe,
    esse processo --> ( $nomeVariavel = new nomeClasse() ) <-- é uma instancia ou uma copia da classe
  
*/

class Pessoa {
    
    public $nome; // atributo

    public function falar(){ // Método 
        return "O meu nome é " . $this->nome;

    }

}

$pedro = new Pessoa();

$pedro->nome = "Glaucio";

echo $pedro->falar();




?>