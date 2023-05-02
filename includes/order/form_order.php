<?php
    // query info
    $usr_type = $_GET['usr_type'];
    
    // get query
    $order_id = $_GET['id'];
    $sql = "select * from orders where id = $order_id";
    
    // sect header
    if($usr_type == "adm") {
        $title = "Editar venda: ".$order_id;
    } else {
        $title = "Editar pedido: ".$order_id;
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
            ?>
                    <!-- result -->
            <?php
                }
            } catch (PDOException $e) {
                die("Erro: <code>" . $e->getMessage() . "</code>");
            }
        ?>
    </div>
</section>