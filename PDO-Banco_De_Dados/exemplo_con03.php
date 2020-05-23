<?php

define('DNS', 'mysql:dbname=blog;host=localhost');
define('DBUSER', 'root');
define('DAPASS', '');

try{

    $con = new PDO(DNS, DBUSER, DAPASS);

    $email = "EmailEstaitco.com.br";
    $newEmail = "emailalterado.com.br";
    
    $update = "UPDATE usuarios SET email = '$newEmail' WHERE email = '$email'";
    $update = $con->query($update);
    $lista = "SELECT * FROM usuarios";
    $sql = $con->query($lista);

    if($sql->rowCount() > 0){
        foreach ($sql->fetchAll() as $users) {
            echo "Nome: " . $users['nome'] . "<br>";
            echo "Email: " . $users['email'] . "<br>";
            echo "<hr>";
        }
    }else{
        echo "Sem usuários.";
    }

} catch (PDOException $exc){
    echo "Falha: " . $exc->getMessagem();
}