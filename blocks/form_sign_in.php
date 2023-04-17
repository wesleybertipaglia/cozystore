<section>
    <div class="sect-content row jc-ce">
        <form action="http://localhost/cozzy/functions/fun_sign_in.php" method="post" class="col g-16">
            <h2>Entrar</h2>
            <div class="col g-8">
                <label for="email">E-mail</label>
                <input type="email" name="usr_email" required>
            </div>

            <div class="col g-8">
                <label for="usr_pass">Senha</label>
                <input type="password" name="usr_pass" required>
            </div>
            
            <button type="submit" class="btn-pri">Entrar</button>

            <div class="row g-8">
                <p>Não tem conta?</p>
                <a href="http://localhost/cozzy/pages/sign_up.php" class="td-underline">Cadastre-se</a>
            </div>
        </form>
    </div>
</section>