<?php

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($logradouro, $numero, $cidade)
    {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
    }

    public function getLogradouro()
    {
        return $this->logradouro;
    }


    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }


    public function getNumero()
    {
        return $this->numero;
    }


    public function setNumero($numero)
    {
        $this->numero = $numero;
    }


    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function __destruct()
    {

    }

    public function __toString()
    {
        return $this->logradouro . ", " .  $this->cidade;
    }
}

$meuEndereco = new Endereco("Rua Leitão Pereira", "671", "Rio de Fevereiro");

var_dump($meuEndereco);


echo $meuEndereco;