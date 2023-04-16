<?php
    $dbtype   = "mysql";
    $host     = "localhost";
    $port     = "3306";
    $user     = "root";
    $password = "";
    $db       = "cozzydb";
    try
        {   
            $connection = new PDO(
                $dbtype.
                ":host=".$host.
                ";port=".$port.
                ";dbname=".$db, 
                $user, 
                $password
            );
        }
    catch (PDOException $i)
    {
        die("Erro: <code>" . $i->getMessage() . "</code>");
    }
?>