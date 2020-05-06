<?php

$soma1 = function ($a, $b){
    return $a + $b;

};



echo $soma1(13, 17) . "<br>";
echo is_callable($soma1)? "Verdadeira" : "Falsa";
echo "<br>";

$soma1 = 1;
echo is_callable($soma1)? "Verdadeira" : "Falsa";
echo "<br>";

function soma2($a, $b){
    return $a + $b;

}

echo soma2(10, 15) . "<br>";

var_dump($soma1);
var_dump(soma2(3,3));