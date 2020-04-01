<?php

require_once("exemplo_03.php");

echo session_save_path() . "<br>";

var_dump(session_status()) . "<br>";

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "A sessõe está desabilitadas.";
        break;
        
    case PHP_SESSION_NONE:
        echo "Sessõe  habilitada, mas nenhuma existi.";
        break;
        
    case PHP_SESSION_ACTIVE:
        echo "Sessõe habilitada, e uma existi.";
        break;    
}