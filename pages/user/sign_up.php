<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cozzy | Cadastre-se</title>
    <?php 
        $path = realpath("../../");
        require_once $path."/blocks/site/sct_head.php"; 
        require_once $path."/functions/fun_connection.php";
    ?>
</head>
<body>
    <?php require_once $path."/blocks/site/sct_nav.php"; ?>
    <main>
        <?php require_once $path."/blocks/user/form_sign_up.php"; ?>
    </main>
    <?php require_once $path."/blocks/site/sct_footer.php"; ?>
</body>
</html>