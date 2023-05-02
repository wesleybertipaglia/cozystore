<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cozzy | Itens para Decoração</title>
    <?php 
        require_once "config.php";
        require_once $path."includes/site/sct_head.php"; 
        require_once $path."functions/database/fun_connection.php";
    ?>
</head>
<body>
    <?php
        require_once $path."includes/site/sct_nav.php";
        require_once $path."includes/site/sct_hero.php";
        require_once $path."includes/site/sct_benefits.php";
    ?>
    
    <main>
        <?php
            // best sellers
            $_GET['max'] = 6;
            $_GET['order'] = "rand()";
            $_GET['title'] = "Os mais vendidos";
            $_GET['subtitle'] = "OS CLIENTES ESCOLHERAM";
            $_GET['paragraph'] = "";
            $_GET['flex_format'] = "flex-0";
            $_GET['display_format'] = "row of-auto";
            require $path."includes/product/sct_products.php";

            // new products
            $_GET['max'] = 6;
            $_GET['order'] = "id";
            $_GET['title'] = "Novidades da semana";
            $_GET['subtitle'] = "LANÇAMENTOS";
            $_GET['paragraph'] = "Mobiliário para sala, cozinha, quartos, escritórios, casas de banho, exteriores, e muito mais.";
            $_GET['flex_format'] = "flex-0";
            $_GET['display_format'] = "row of-auto";
            require $path."includes/product/sct_products.php";
            
            // categrories
            require $path."includes/product/categories.php";

            // best ratings
            $_GET['max'] = 8;
            $_GET['order'] = "rand()";
            $_GET['title'] = "Mais bem avaliados";
            $_GET['subtitle'] = "Avaliados";
            $_GET['paragraph'] = "";
            $_GET['flex_format'] = "flex-1";
            $_GET['display_format'] = "product-grid onres-row onres-fw-wrap";
            require $path."includes/product/sct_products.php";
            
            // newsletter
            require_once $path."includes/site/sct_newsletter.php";
        ?>
    </main>

    <?php
        require_once $path."includes/site/sct_footer.php";
    ?>
</body>
</html>