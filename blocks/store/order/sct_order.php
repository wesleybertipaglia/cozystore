<?php
    $order_id = $_GET['id'];
    $sql = "select * from products_sold where order_id = $order_id";
?>

<section>
    <div class="sect-content">
        <div class="sect-header">
            <h2>Venda <?php echo "#".$order_id ?></h2>
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
                    <div class="col g-16">
                        <div class="row g-8">
                            <div class="">
                                <span><?php echo "Produto: ".$product['product_name']; ?></span>
                            </div>
                            <div class="">
                                <span><?php echo "Id Cliente: ".$row['idcliente']; ?></span>  
                            </div>
                            <div class="">
                                <span><?php echo "Id Produto: ".$row['idproduto']; ?></span>
                            </div>
                            <div class="">
                                <span>Preco: </span>
                                <span>R$<?php echo $row['preco']; ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } catch (PDOException $e) {
                die("Erro: <code>" . $e->getMessage() . "</code>");
            }
        ?>
    </div>
</section>