<?php    
    // set paths
    $home = "http://localhost/cozzy/";
    $path = realpath("../../");

    // database connect 
    require_once $path."/database/fun_connection.php";    

    // set product variables
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $product_price = $_POST['product_price'];
    $product_pic = $_POST['product_pic'];
    $product_id = $_POST['product_id'];

    try {
        if(isset($_POST['product_pic'])) {
            $sql = "
                update products
                set name = '$product_name', 
                descricao = '$product_desc', 
                preco = '$product_price', 
                foto = '$product_pic'
                where id = $product_id
            ";
        } else {
            $sql = "
                update products
                set name = '$product_name', 
                description = '$product_desc', 
                price = '$product_price'
                where id = $product_id
            ";
        }

        $query=$connection->prepare($sql);
        $query->execute();
    }
    catch(PDOException $e) {
        die("Erro: <code>".$e->getMessage()."</code>");
    }
    
    // return to home
    header("location: $home");
?>