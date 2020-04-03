<?php

interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo{

    public function acelerar($velocidade)
    {
        echo "o veiculo acelerou até " . $velocidade;
    }
    public function frenar($velocidade)
    {
        echo "O veiculo frenou até " . $velocidade;
    }

    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a march " . $marcha;
    }

}

$carro = new Civic();
$carro->trocarMarcha(3);