<?php
    // set paths
    $home = "http://localhost/cozzy/";
    $path = realpath("../../");

    // database connect 
    require_once $path."/database/fun_connection.php";
    
    // delete product
    $product_id = $_GET['id'];
    try {
        $sql = "delete from products where id = $product_id";
        $query=$connection->prepare($sql);
        $query->execute();
        header("Location: $home");
    }
    catch(PDOException $e) {
        die("Erro: <code>".$e->getMessage()."</code>");
    }

    // return to home
    header("location: $home");
?>