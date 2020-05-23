<?php

define('DNS', 'mysql:dbname=blog;host=localhost');
define('DBUSER', 'root');
define('DAPASS', '');

try{

    $con = new PDO(DNS, DBUSER, DAPASS);

    $nome = "TesteEstatico";
    $email = "EmailEstaitco.com.br";
    $senha = "123testeEstatico";

    $insere = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    $insere = $con->query($insere);
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