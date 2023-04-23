<?php
    $product_id = $_GET['id'];
    $sql = "select * from products where id = $product_id";
?>

<section>
    <div class="sect-content">
        <div class="sect-header">
            <h2>Nome do produto</h2>
        </div>
    </div>
</section>