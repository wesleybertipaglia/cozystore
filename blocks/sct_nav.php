<nav>
    <div class="sect-content py-8 row jc-sb ai-ce">
        <div class="row w-50">
            <a href="http://localhost/cozzy/">Cozzy.</a>
        </div>
        <div class="row g-16 w-100 jc-ce ai-ce onres-d-none">
            <a href="">Mais Vendidos</a>
            <a href="">Promoções</a>
            <a href="">Iluminação</a>
            <a href="">Taepeçaria</a>
            <a href="">Ceramicas</a>
        </div>
        <div class="row g-8 w-50 ai-ce jc-fe">
            <?php
                if (isset($_SESSION['usr_name'])) {
            ?>
                <a href="http://localhost/cozzy/pages/cart">
                    <span class="material-symbols-outlined">shopping_bag</span>
                </a>        
                <a href='http://localhost/cozzy/pages/profile.php'>
                    <span class="material-symbols-outlined">person</span>
                </a>
            <?php
                } else {
            ?>
                <a href='http://localhost/cozzy/pages/sign_in.php'>
                    <button class="btn-sec">Entrar</button>
                </a>
                <a href='http://localhost/cozzy/pages/sign_up.php'>
                    <button class="btn-pri">Cadastrar</button>
                </a>
            <?php
                }
            ?>
        </div>
    </div>
</nav>