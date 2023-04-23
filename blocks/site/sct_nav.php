<?php
    session_start();
?>

<nav>
    <div class="sect-content py-8 row jc-sb ai-ce">
        <div class="row w-50">
            <a href="<?php echo $home; ?>">Cozzy.</a>
        </div>
        <div class="row w-100 g-16 jc-ce ai-ce onres-d-none">
            <a href="<?php echo $home.'#mais-vendidos' ?>">Mais Vendidos</a>
            <a href="<?php echo $home.'#promocoes' ?>">Promoções</a>
            <a href="<?php echo $home.'pages/store/store.php?category=iluminacao' ?>">Iluminação</a>
            <a href="<?php echo $home.'pages/store/store.php?category=tapecaria' ?>">Tapeçaria</a>
            <a href="<?php echo $home.'pages/store/store.php?category=ceramicas' ?>">Ceramicas</a>
        </div>

        <div class="row w-50 g-8 ai-ce jc-fe">
            <?php
                if (isset($_SESSION['usr_name'])) {
            ?>
                <a href="<?php echo $home.'pages/store/cart.php' ?>">
                    <img src="<?php echo $home.'src/assets/icons/icon_bag.svg' ?>" alt="Carrinho">
                </a>        
                <a href="<?php echo $home.'pages/user/profile.php' ?>">
                    <img src="<?php echo $home.'src/assets/icons/icon_user.svg' ?>" alt="Perfil">
                </a>
            <?php
                } else {
            ?>
                <a href="<?php echo $home.'pages/user/sign_in.php' ?>">
                    <button class="btn-sec">Entrar</button>
                </a>
                <a href="<?php echo $home.'pages/user/sign_up.php' ?>">
                    <button class="btn-pri">Cadastrar</button>
                </a>
            <?php
                }
            ?>
        </div>
    </div>
</nav>