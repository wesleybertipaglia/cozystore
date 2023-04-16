<?php
    $id = $_GET['id'];
    require_once("fun_connect_db.php");

    try {
        $sql = "delete from products where id = $id";
        $query=$connection->prepare($sql);
        $query->execute();
        $rs = $connection->lastInsertId();
        echo ("Produto deletado com sucesso");

        header("Location: ../index.html");
    }
    catch(PDOException $i) {
        die("Erro: <code>".$i->getMessage()."</code>");
    }
?>