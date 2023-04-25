<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        // set paths
        $home = "http://localhost/cozzy/";
        $path = realpath("../../");
        
        require_once $path."/blocks/site/sct_head.php"; 
        require_once $path."/functions/database/fun_connection.php";

        if(isset($_GET['query'])) {
            $title = "Resultados para: ".$_GET['usr_type'];
        } else {
            $title = "Os produtos mais procurados do Brasil";
        }
    ?>
    <title>Cozzy | <?php echo $title; ?></title>
</head>
<body>
    <?php require_once $path."/blocks/site/sct_nav.php"; ?>
    <main>
        <?php require_once $path."/blocks/product/sct_products.php";?>
    </main>    
    <?php require_once $path."/blocks/site/sct_footer.php"; ?>
</body>
</html>