<?php
    // query info
    $usr_id = $_GET['usr_id'];
    $usr_type = $_GET['usr_type'];

    if($usr_type == "adm") {
        $title = "Vendas: ".$order_id;
        $sql = "select * from orders;";
    } else {
        $title = "Editar pedido: ".$order_id;
        $sql = "select * from orders where usr_id = $usr_id;";
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