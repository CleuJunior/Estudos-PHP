<?php

require_once("exemplo_03.php");

session_unset();

echo $_SESSION["nome"];

session_destroy();