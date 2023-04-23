<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cozzy | Entrar</title>
    <?php 
        $path = realpath("../../");
        require_once $path."/blocks/site/sct_head.php"; 
    ?>
</head>
<body>
    <?php require_once $path."/blocks/site/sct_nav.php"; ?>
    <main>
        <?php require_once $path."/blocks/user/form_sign_in.php"; ?>
    </main>
    <?php require_once $path."/blocks/site/sct_footer.php";?>
</body>
</html>