<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cozzy | <?php echo "Nome do usuario"; ?></title>
    <?php 
        $path = realpath("../../");
        require_once $path."/blocks/site/sct_head.php"; 
        require_once $path."/functions/fun_connection.php";
    ?>
</head>
<body>
    <?php require_once $path."/blocks/site/sct_nav.php"; ?>
    <main>
        <?php require_once $path."/blocks/user/sct_profile.php"; ?>
    </main>
    <?php require_once $path."/blocks/site/sct_footer.php"; ?>
</body>
</html>