<?php

$soma = function ($a, $b){
    return $a + $b;
};

echo $soma(3, 2) . "<br>";

function executar($a , $b, $op, $funcao){
    $resultado = $funcao($a, $b);
    echo "{$a} {$op} {$b} = $resultado<br>";
}

executar(3, 1, '+', $soma);

$multiplicar = function ($a, $b){
    return $a * $b;
};

echo $multiplicar(5, 5) ." <br>";

executar(25, 15, '*', $multiplicar);


$div = function ($a, $b){
    return $a / $b;

};

executar(9, 3, '/', $div);