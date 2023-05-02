<?php
    // setup
    require_once "../../config.php";
    require_once $path."functions/database/fun_connection.php"; 
    
    // delete product
    $product_id = $_GET['del'];
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
    header("location: ".$home."pages/adm/products/adm_products.php");
?>