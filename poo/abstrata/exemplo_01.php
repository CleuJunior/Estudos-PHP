<?php


interface Veiculo
{
    public function acelerar($velocidade);

    public function frenar($velocidade);

    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo
{

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

class Delrey extends Automovel{
    public static function empurrar()
    {
        
    }
    
}

$carro = new Delrey();
$carro->acelerar(163);

