<?php
interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($velocidade);
}

abstract class Automovel implements Veiculo
{
    public function acelerar($velocidade)
    {
        echo "O veiculo acereou até " .$velocidade . " Km/h";
    }

    public function frenar($velocidade)
    {
        echo "O veiculo frenou até " .$velocidade . " Km/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veiculo engatou a marcha " .$marcha . " Km/h";
    }
}