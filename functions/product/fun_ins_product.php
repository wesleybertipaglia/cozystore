<?php    
    // setup
    require_once "../../config.php";
    require_once $path."functions/database/fun_connection.php"; 

    // set product variables
    $name = $_POST['product_name'];
    $desc = $_POST['product_desc'];
    $cat = $_POST['product_cat'];
    $pic = $_POST['product_pic'];
    $price = $_POST['product_price'];
    $quantity = $_POST['product_quantity'];

    // insert product
    try {
        $sql = " 
            insert into products (product_name, product_desc, product_cat, product_pic, product_price, product_quantity)
            values ('$name', '$desc', '$cat', '$pic', '$price', '$quantity');
        ";
        $query = $connection ->prepare($sql);
        $query -> execute();
    }
    catch(PDOException $e) {
        die("Erro: <code>".$e->getMessage()."</code>");
    }

    // return to home
    header("location: $home");
?>