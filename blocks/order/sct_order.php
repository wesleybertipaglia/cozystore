<?php
    // query info
    $usr_type = $_GET['usr_type'];
    
    // get query
    $order_id = $_GET['id'];
    $sql = "select * from products_sold where order_id = $order_id";
    
    // sect header
    if($usr_type == "adm") {
        $title = "Venda: ".$order_id;
    } else {
        $title = "Pedido: ".$order_id;
    }
?>  

<section>
    <div class="sect-content">
        <div class="sect-header">
            <h2><?php echo $title ?></h2>
        </div>

        <?php
            try {
                $result = $connection->query($sql);
                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data as $row) {
                    $sql_product = "select * from products where ".$row['id'];
                    $result_product = $connection->query($sql_product);
                    $product = $result_product->fetchAll(PDO::FETCH_ASSOC);
            ?>
                    <!-- order -->
            <?php
                }
            } catch (PDOException $e) {
                die("Erro: <code>" . $e->getMessage() . "</code>");
            }
        ?>
    </div>
</section>