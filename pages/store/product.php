<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cozzy | <?php echo $title ?></title>
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
        <?php require_once $path."/blocks/product/sct_product.php"; ?>
    </main>
    <?php require_once $path."/blocks/site/sct_footer.php"; ?>
</body>
</html>