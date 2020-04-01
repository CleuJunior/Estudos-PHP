<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Junior',
    'idade' => '29'
    
));

array_push($pessoas, array(
    'nome' => 'Rebeca',
    'idade' => '25'
    
));

array_push($pessoas, array(
    'nome' => 'Fabio',
    'idade' => '27'
    
));

echo json_encode($pessoas);