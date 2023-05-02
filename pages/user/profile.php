<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        require_once "../../config.php";        
        require_once $path."includes/site/sct_head.php"; 
        require_once $path."functions/database/fun_connection.php";
    ?>
    <title>Cozzy | <?php echo $_SESSION['usr_name']; ?></title>
</head>
<body>
    <?php require_once $path."includes/site/sct_nav.php"; ?>
    <main>
        <?php require_once $path."includes/user/sct_profile.php"; ?>
    </main>
    <?php require_once $path."includes/site/sct_footer.php"; ?>
</body>
</html>