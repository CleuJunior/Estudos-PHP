<?php

// Usando um laço FOR.

function somaAteum($num)
{
    $soma = 0;
    for ($i = 0; $i <= $num; $i++) {
        $soma += $i;
    }

    return $soma;

}

echo somaAteum(10) . "<br>";

// Recursividade chamando a porpria função

function somaRecursiva($num)
{
    if ($num === 1) return 1;

    return $num + somaRecursiva($num -1);

}

echo  somaRecursiva(10);

echo "<br>";

// Recursividade chamando a porpria função e uma condição ternaria.

function somaRecursivaEconomia($num){
    return $num === 1? 1 : $num + somaRecursivaEconomia($num-1);

};

echo somaRecursivaEconomia(10);