<?php    
    $name = $_POST['product_name'];
    $desc = $_POST['product_desc'];
    $pic = $_POST['product_pic'];
    $price = $_POST['product_price'];
    $quantity = $_POST['product_quantity'];

    try {
        $sql = " 
            insert into products (product_name, product_desc, product_pic, product_price, product_quantity)
            values ($name, $desc, $price, $pic, $price, $quantity);
        ";

        $query=$connection->prepare($sql);
        $query->execute();
        echo ("Produto editado com sucesso");

        header("location: $home");
    }
    catch(PDOException $e) {
        die("Erro: <code>".$e->getMessage()."</code>");
    }
?>