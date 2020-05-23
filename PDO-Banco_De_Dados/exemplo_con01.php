<?php

define('DNS', 'mysql:dbname=blog;host=localhost');
define('DBUSER', 'root');
define('DAPASS', '');

try{

    $con = new PDO(DNS, DBUSER, DAPASS);

    $sql = "SELECT * FROM usuarios";
    $sql = $con->query($sql);

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