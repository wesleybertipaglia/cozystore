<nav>
    <div class="sect-content">
        <div class="row">
            <a href="http://localhost/cozzy/">Cozzy</a>
        </div>
        <div class="row">
            <a href="">Mais Vendidos</a>
            <a href="">Promoção</a>
            <a href="">Iluminação</a>
            <a href="">Taepeçaria</a>
            <a href="">Ceramicas</a>
        </div>
        <div class="row">
            <?php
                if (isset($_SESSION['usr_name'])) {
            ?>
                <a href=''>
                    <img src="" alt="Usuario">
                </a>
            <?php
                } else {
            ?>
                <a href='http://localhost/cozzy/pages/sign_in.php'>Entrar</a>
                <a href='http://localhost/cozzy/pages/sign_up.php'>Cadastrar</a>
            <?php
                }
            ?>
        </div>
    </div>
</nav>