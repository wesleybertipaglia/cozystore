<?php
    $product_id = $_GET['id'];

    try {
        $sql = "delete from products where id = $product_id";
        $query=$connection->prepare($sql);
        $query->execute();
        $result = $connection->lastInsertId();
        header("Location: $home");
    }
    catch(PDOException $e) {
        die("Erro: <code>".$e->getMessage()."</code>");
    }
?>