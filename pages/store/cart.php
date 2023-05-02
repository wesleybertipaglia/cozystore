<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        require_once "../../config.php";
        require_once $path."includes/site/sct_head.php"; 
        require_once $path."functions/database/fun_connection.php";
    ?>
    <title>Cozzy | Carrinho de Compras</title>
</head>
<body>
    <?php require_once $path."includes/site/sct_nav.php"; ?>
    <main>
        <?php 
            if($_SESSION['usr_name'] == null) {
                require_once $path_includes."user/sct_sign-in-to-use.php";
            } else {
                require_once $path_includes."cart/sct_cart.php"; 
            }
        ?>
    </main>
    <?php require_once $path."includes/site/sct_footer.php"; ?>
</body>
</html>