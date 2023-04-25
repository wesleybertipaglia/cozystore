<?php
    // section header
    $title = $_GET['title'];
    $subtitle = $_GET['subtitle'];
    $paragraph = $_GET['paragraph'];

    // get query
    if(isset($_GET['query'])) {
        $title = "Resultados para: ".$_GET['query'];
        $subtitle = "";
        $paragraph = "";
        $query = "where product_name like '%".$_GET['query']."%' or product_cat like '%".$_GET['query']."%'";
    }
    if(isset($_GET['category'])) {
        $category = "where product_cat like '%".$_GET['category']."%'";
    }
    if(isset($_GET['order'])) {
        $order = "order by ".$_GET['order'];
    }
    if(isset($_GET['max'])) {
        $max = "limit ".$_GET['max'];
    }

    $sql = "select * from products $query $category $order $max";
?>

<section>
    <div class="sect-content">
        <div class="sect-header">
            <div class="col g-16 ta-ce">
                <span class="txt-spaced-light fs-14"><?php if(isset($subtitle)) {echo $subtitle;} ?></span>
                <h2><?php if(isset($title)) {echo $title;} ?></h2>
                <p><?php if(isset($paragraph)) {echo $paragraph;} ?></p>
            </div>
        </div>
        <div class="row g-24 of-auto">
            <?php
            try {
                $result = $connection->query($sql);
                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data as $row) {
            ?>
                    <div>
                        <a href="<?php echo $home.'pages/store/product.php?id='.$row['id']; ?>" class="col g-8">
                            <figure class="img-box img-small">
                                <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($row["product_pic"]); ?>" alt="Imagem do produto">
                            </figure>
                        </a>
                        <div>
                            <p><?php echo $row['product_name']; ?></p>
                            <div class="row g-8 py-8">
                                <span>
                                    <?php echo "R$".$row['product_price']; ?>
                                </span>
                                <a href="<?php echo $home.'pages/store/product.php?id='.$row['id']; ?>">Ver</a>
                                <a href="<?php echo $home.'functions/cart/fun_ins_cart.php?add='.$row['id']; ?>" title="Adicionar ao carrinho">
                                    <img src="<?php echo $home.'src/assets/icons/icon_bag.svg' ?>" alt="Adicionar ao carrinho">
                                </a>
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
    </div>
</section>