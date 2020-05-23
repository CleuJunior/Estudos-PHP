<?php

define('DNS', 'mysql:dbname=blog;host=localhost');
define('DBUSER', 'root');
define('DAPASS', '');

try{

    $con = new PDO(DNS, DBUSER, DAPASS);

    $id = 3;

    $delete = "DELETE FROM usuarios WHERE id = $id";
    $delete = $con->query($delete);
    $sql = "SELECT * FROM usuarios";
    $sql = $con->query($sql);

    if($sql->rowCount() > 0){
        foreach ($sql->fetchAll() as $users) {
            echo "Nome: " . $users['nome'] . "<br>";
            echo "Email: " . $users['email'] . "<br>";
            echo "ID: " . $users['id'];
            echo "<hr>";
        }
    }else{
        echo "Sem usuários.";
    }

} catch (PDOException $exc){
    echo "Falha: " . $exc->getMessagem();
}