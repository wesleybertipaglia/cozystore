<section>
    <div class="sect-content">
    <form action="http://localhost/cozzy/functions/fun_sign_up.php" method="post" class="form-sign">
        <div class="input-group">
            <label for="usr_email">E-mail</label>
            <input type="email" name="usr_email" required>
        </div>

        <div class="input-group">
            <label for="usr_pass">Senha</label>
            <input type="password" name="usr_pass" required>
        </div>

        <div class="input-group">
            <label for="usr_terms">Termos de uso</label>
            <input type="checkbox" name="usr_terms" required>
        </div>
        
        <button type="submit">Cadastrar</button>
    </form>
    </div>
</section>