<?php

$conn = new mysqli("127.0.0.1", "root", "", "phpmysql");


if($conn->connect_error){
    echo "Erro: " .  $conn->connect_error;


}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();




