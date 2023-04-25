<section>
    <div class="sect-content">
        <div class="sect-header">
            <h2>Carrinho</h2>
        </div>
        <div class="col g-16">
            <?php
                session_start();
                $i = 0;
                
                try {
                    if (!empty($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $product_id) {
                            $pos = $_SESSION['cart_pos'];
                            $sql = "select * from products where id = $product_id";
                            $result = $connection->query($sql);
                            $data = $result->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($data as $row) {
                                echo "
                                    <div class='row g-16'>
                                        <figure class='img-box img-small'>
                                        <img src='data:image/jpeg;base64,".base64_encode($row["product_pic"])."' alt='".$row['product_name']."' style='height:100px; aspect-ratio: 1/1;'>
                                        </figure>

                                        <div class='col g-8'>
                                            <span>".$row['product_name']."</span>
                                            <span>".$row['product_price']."</span>
                                            <a href='".$home."functions/cart/fun_del_cart.php?remove=".$i."'>Remover</a>
                                        </div>
                                    </div>
                                ";
                                $i++;
                            }
                    }
                } else {
                    echo "Seu carrinho está vazio!";
                }
                } catch (PDOException $e) {
                die("Erro: <code>" . $e->getMessage() . "</code>");
                }
            ?>
        </div>

        <div class="row g-16 pt-48">
            <a href="<?php echo $home."functions/cart/fun_clr_cart.php"; ?>">
                <button>Limpar carrinho</button>
            </a>
            <a href="<?php echo $home."functions/order/fun_ins_order.php"; ?>">
                <button>Finalizar compra</button>
            </a>
        </div>
    </div>
</section>