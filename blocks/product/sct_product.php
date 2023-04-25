<?php
// query info
$usr_type = $_GET['usr_type'];

// get query
$product_id = $_GET['id'];
$sql = "select * from products where id = $product_id";

try {
    $result = $connection->query($sql);
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data as $row) {
        $product_id = $row['id'];
        $product_name = $row['product_name'];
        $product_desc = $row['product_desc'];
        $product_pic = $row['product_pic'];
        $product_price = $row['product_price'];
        $product_quantity = $row['product_quantity'];
    }
} catch (PDOException $e) {
    die("Erro: <code>" . $e->getMessage() . "</code>");
}

// sect header
$title = $product_name;
?>

<section>
    <div class="sect-content">
        <div class="sect-header"></div>
        <div class="row g-48 jc-ce">
            <figure class="img-box img-medium">
                <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode($product_pic); ?>" alt="Imagem do produto">
            </figure>

            <div class="col g-16">
                <h4><?php echo $product_name; ?></h4>
                <span class="fs-20"><?php echo "R$".$product_price; ?></span>
                <a href="<?php echo $home.'functions/cart/fun_ins_cart.php?add=' . $product_id; ?>" title="Adicionar ao carrinho"><button>Adicionar ao carrinho</button></a>
                <p style="width: 500px;"><?php echo $product_desc; ?></p>
            </div>
        </div>
    </div>
</section>