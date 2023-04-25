<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cozzy | Cadastre-se</title>
    <?php 
        // set paths
        $home = "http://localhost/cozzy/";
        $path = realpath("../../");
        
        require_once $path."/blocks/site/sct_head.php"; 
        require_once $path."/functions/database/fun_connection.php";
    ?>
</head>
<body>
    <?php require_once $path."/blocks/site/sct_nav.php"; ?>
    <main class="jc-ce">
        <?php require_once $path."/blocks/user/form_sign_up.php"; ?>
    </main>
    <?php require_once $path."/blocks/site/sct_footer.php"; ?>
</body>
</html>