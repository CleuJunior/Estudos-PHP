<?php

$dt = new DateTime();
$periodo = new DateInterval("P19D");

echo $dt->format("d/m/Y H:i:s") . "<br>";

$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");