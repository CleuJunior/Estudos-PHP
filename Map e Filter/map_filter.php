<?php


$notas = [4.3, 5.6, 7.8, 8.1];
$notasFinais1 = [];

foreach ($notas as $nota) {
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

echo "<br>";

$notasFinais2 = array_map("round", $notas);

print_r($notasFinais2);

$aprovados1 = [];

foreach ($notas as $nota) {
    if ($nota > 6) $aprovados1[] = $nota;
}

echo "<br>";

print_r($aprovados1);

function aprovados($nota){
    return $nota > 6;
}

$aprovados2 = array_filter($notas, "aprovados");

echo "<br>";

print_r($aprovados2);

function calculoFinal($nota){
    $notafinal = round($nota) +1;
    return $notafinal > 10 ? 10 : $notafinal;
}

echo "<br>";

$notasFinais3 = array_map("calculoFinal", $notas);

print_r($notasFinais3);