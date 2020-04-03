<?php

class Documento{
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}

class CPF extends Documento{

    public function validar(): bool
    {
        $numeroCPF = $this->getNumero();
        // Validação de CPF
        return true;
    }
}

$doc = new CPF();
$doc->setNumero("199827160-30");
echo $doc->validar();

echo "<br>";

echo $doc->getNumero();