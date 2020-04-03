<?php

abstract class Animal{
    public function falar()
    {
        return "som";
    }

    public function mover()
    {
        return "Andar";
    }

}

class Gato extends Animal{
    public function falar(){
        return "Miar";
    }

}

class Cachorro extends Animal{
    public function falar(){
        return "Late";
    }

}

class Passaro extends Animal
{
    public function falar()
    {
        return "Canta";

    }

    public function mover(){
        return "Voa e " . parent::mover();
    }
}


$tom = new Gato();
echo $tom->falar() . "<br>";
echo $tom->mover() . "<br>";
echo "________________________________<br>";
$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
echo "________________________________<br>";
$piupiu = new Passaro();
echo $piupiu->falar() . "<br>";
echo $piupiu->mover() . "<br>";