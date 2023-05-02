<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        require_once "../../config.php";
        require_once $path."includes/site/sct_head.php"; 
        require_once $path."functions/database/fun_connection.php";

        if(isset($_GET['query'])) {
            $title = "Resultados para: ".$_GET['query'];
        } else {
            $title = "Os produtos mais procurados do Brasil";
        }
        if($_GET['title'] == null && $_GET['query'] != null) {
            $_GET['title'] = $_GET['query'];
        } else if($_GET['title'] == null && $_GET['category'] != null) {
            $_GET['title'] = $_GET['category'];
        }
    ?>
    <title>Cozzy | <?php echo $_GET['title']; ?></title>
</head>
<body>
    <?php require_once $path."includes/site/sct_nav.php"; ?>
    <main>
        <?php 
            $_GET['flex_format'] = "flex-1";
            $_GET['display_format'] = "product-grid onres-row onres-fw-wrap";
            require_once $path."includes/product/sct_products.php";
        ?>
    </main>    
    <?php require_once $path."includes/site/sct_footer.php"; ?>
</body>
</html>