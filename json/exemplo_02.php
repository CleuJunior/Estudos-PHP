<?php


$json = '[{"nome":"Junior","idade":"29"},{"nome":"Rebeca","idade":"25"},{"nome":"Fabio","idade":"27"}]';

$dados = json_decode($json, true);

var_dump($dados);