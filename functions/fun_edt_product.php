<?php    
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $product_price = $_POST['product_price'];
    $product_pic = $_POST['product_pic'];
    $product_id = $_POST['product_id'];

    // connection
    require_once("fun_connect_db.php");
    session_start();

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
        $rs = $connection->lastInsertId();
        echo ("Produto editado com sucesso");

        header("Location: ../index.php");
    }
    catch(PDOException $i) {
        die("Erro: <code>".$i->getMessage()."</code>");
    }
?>