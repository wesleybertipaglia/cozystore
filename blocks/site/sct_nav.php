<?php
    session_start();
?>

<nav>
    <div class="sect-content py-8 row g-24 jc-sb ai-ce">
        <div class="row g-48 ai-ce jc-fe">
            <a href="<?php echo $home; ?>">Cozzy.</a>
            <div class="row w-100 g-16 jc-ce ai-ce onres-d-none">
                <a href="<?php echo $home.'pages/store/?category=iluminacao' ?>">Iluminação</a>
                <a href="<?php echo $home.'pages/store/?category=tapecaria' ?>">Tapeçaria</a>
                <a href="<?php echo $home.'pages/store/?category=ceramicas' ?>">Ceramicas</a>
                <a href="<?php echo $home.'pages/store/?category=madeira' ?>">Madeira</a>
            </div>
        </div>

        <div class="row g-48 ai-ce jc-fe">
            <form action="<?php echo $home."pages/store"; ?>" method="get" class="row g-0 w-fc">
                <input type="search" name="query" class="ipt-search">
                <button type="submit" class="btn-search">
                    <img src="<?php echo $home."src/assets/icons/icon_search.svg"; ?>" alt="Pesquisar">
                </button>
            </form>
            <div class="row g-8">
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

    </div>
</nav>