<?php

class Pessoa{
    public $nome = "Fulano de Tal";
    protected $idade = 56;
    private $senha = "09876554321";

    public function verDados()
    {
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }

}

$objeto = new Pessoa();
$objeto->verDados();
