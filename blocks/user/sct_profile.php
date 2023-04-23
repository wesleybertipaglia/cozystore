<section>
    <div class="sect-content">
        <div class="sect-header">
            <h2>Perfil</h2>
            <p><?php echo $_SESSION['usr_name'] ?></p> <br> 

            <?php if ($_SESSION['usr_type'] == 2) { ?>
                    <p><a href="<?php echo $home.'pages/user/orders.php' ?>">Minhas compras</a></p> <br> 
            <?php } else { ?>
                    <p><a href="<?php echo $home.'pages/adm/store/adm_orders.php' ?>">Vendas</a></p> <br> 
                    <p><a href="<?php echo $home.'pages/adm/store/adm_products.php' ?>">Produtos</a></p> <br> 
                    <p><a href="<?php echo $home.'pages/adm/store/adm_product.php' ?>">Adicionar produto</a></p> <br> 
            <?php } ?>
            <p><a href="<?php echo $home.'functions/user/fun_sign_out.php' ?>">Sair</a></p>
        </div>
    </div>
</section>