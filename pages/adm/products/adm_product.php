<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        require_once "../../../config.php";
        require_once $path."includes/site/sct_head.php"; 
        require_once $path."functions/database/fun_connection.php";
    ?>
    <title>Cozzy | <?php echo "Produto #".$_GET['id'] ?></title>
</head>
<body>
    <?php require_once $path."includes/site/sct_nav.php"; ?>
    <main>
        <?php require_once $path."includes/product/form_product.php"; ?>
    </main>
    <?php require_once $path."includes/site/sct_footer.php"; ?>
</body>
</html>