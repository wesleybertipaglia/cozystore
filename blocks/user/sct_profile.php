<?php 
    session_start();
    $usr_id = $_SESSION['usr_id'];
    $usr_name = $_SESSION['usr_name'];
    $usr_type = $_SESSION['usr_type'];
?>

<section>
    <div class="sect-content">
        <div class="sect-header">
            <h2>Perfil</h2>
            <div class="col g-24">
                <h4><?php echo $usr_name ?></h4> 
    
                <div class="col g-8">
                    <?php if ($usr_type == 2) { ?>
                            <a href="<?php echo $home.'pages/user/orders.php' ?>">Minhas compras</a>
                    <?php } else { ?>
                            <a href="<?php echo $home.'pages/adm/orders/adm_orders.php' ?>">Vendas</a>
                            <a href="<?php echo $home.'pages/adm/products/adm_products.php' ?>">Produtos</a>
                            <a href="<?php echo $home.'pages/adm/products/adm_product.php' ?>">Adicionar produto</a>
                    <?php } ?>
                    <a href="<?php echo $home.'functions/user/fun_del_usr.php?usr_del='.$usr_id ?>">Deletar conta</a>
                    <a href="<?php echo $home.'functions/user/fun_sign_out.php' ?>">Sair</a>
                </div>
            </div>
        </div>
    </div>
</section>