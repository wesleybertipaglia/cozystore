<div class="row g-48">
    <div class="row flex-1 g-16 p-16 border-light-black br-8">
        <figure class="icon-medium">
            <img src="<?php echo $home."src/assets/icons/profile_sell.svg";?>" alt="Vendas" class="h-5">
        </figure>
        <div class="col g-4">
            <span class="fs-20 fw-600">Vendas</span>
            <a href="<?php echo $home.'pages/adm/orders/adm_orders.php' ?>">Vendas realizadas</a>
        </div>
    </div>

    <div class="row flex-1 g-16 p-16 border-light-black br-8">
        <figure class="icon-medium">
            <img src="<?php echo $home."src/assets/icons/profile_stock.svg";?>" alt="Estoqe" class="h-5">
        </figure>
        <div class="col g-4">
            <span class="fs-20 fw-600">Estoque</span>
            <a href="<?php echo $home.'pages/adm/products/adm_products.php' ?>">Ver Produtos</a>
            <a href="<?php echo $home.'pages/adm/products/adm_product.php' ?>">Adicionar produto</a>
        </div>
    </div>

    <div class="row flex-1 g-16 p-16 border-light-black br-8">
        <figure class="icon-medium">
            <img src="<?php echo $home."src/assets/icons/profile_users.svg";?>" alt="Usuarios" class="h-5">
        </figure>
        <div class="col g-4">
            <span class="fs-20 fw-600">Usuários</span>
            <a href="<?php echo $home.'pages/adm/users/adm_users.php' ?>">Ver Usuários</a>
            <a href="<?php echo $home.'pages/user/sign_up.php' ?>">Adicionar Usuário</a>
        </div>
    </div>

    <div class="row flex-1 g-16 p-16 border-light-black br-8">
        <figure class="icon-medium">
            <img src="<?php echo $home."src/assets/icons/profile_account.svg";?>" alt="Conta" class="h-5">
        </figure>
        <div class="col g-4">
            <span class="fs-20 fw-600">Conta</span>
            <a href="<?php echo $home.'functions/user/fun_del_usr.php?del='.$usr_id ?>">Deletar conta</a>
            <a href="<?php echo $home.'functions/user/fun_sign_out.php' ?>">Sair</a>
        </div>
    </div>
</div>