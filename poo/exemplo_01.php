<?php

class Pessoa{
   public $nome;
   
   public function falar(){
       return "O meu nome é " . $this->nome; 
   }
    
}

$junior = new Pessoa();
$junior->nome = "Junior Soares";
echo $junior->falar();