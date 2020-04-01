<?php

session_id('2mo3mohus98b7h21d8m6a2pgoq');

require_once('exemplo_03.php');

session_regenerate_id();

echo session_id();

var_dump($_SESSION);