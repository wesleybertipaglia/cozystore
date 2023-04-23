<section>
    <div class="sect-content row jc-ce">
        <form action="<?php echo $home.'functions/user/fun_sign_up.php' ?>" method="post" class="col g-16">
            <h2>Cadastre-se</h2>
            
            <div class="col g-8">
                <label for="email">Nome completo</label>
                <input type="text" name="usr_fullname" required>
            </div>
            <div class="col g-8">
                <label for="email">Usuario</label>
                <input type="text" name="usr_name" required>
            </div>
            <div class="col g-8">
                <label for="email">E-mail</label>
                <input type="email" name="usr_email" required>
            </div>

            <div class="col g-8">
                <label for="usr_pass">Senha</label>
                <input type="password" name="usr_pass" required>
            </div>

            <div class="row g-8">
                <label for="usr_terms">Termos de uso</label>
                <input type="checkbox" name="usr_terms" value="yes" class="w-fc" required>
            </div>
            
            <button type="submit" class="btn-pri">Cadastrar</button>

            <div class="row g-8">
                <p>Já tem conta?</p>
                <a href="<?php echo $home.'pages/user/sign_in.php' ?>" class="td-underline">Entre</a>
            </div>
        </form>
    </div>
</section>