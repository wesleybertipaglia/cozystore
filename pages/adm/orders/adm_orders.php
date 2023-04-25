<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cozzy | Vendas</title>
    <?php 
        // set paths
        $home = "http://localhost/cozzy/";
        $path = realpath("../../../");
        
        require_once $path."/blocks/site/sct_head.php"; 
        require_once $path."/functions/database/fun_connection.php";
    ?>
</head>
<body>
    <?php require_once $path."/blocks/site/sct_nav.php"; ?>
    <main>
        <?php require_once $path."/blocks//order/sct_orders.php"; ?>
    </main>
    <?php require_once $path."/blocks/site/sct_footer.php"; ?>
</body>
</html>