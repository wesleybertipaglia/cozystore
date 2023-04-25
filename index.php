<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cozzy | Itens para Decoração</title>
    <?php 
        require_once "blocks/site/sct_head.php"; 
        require_once "functions/database/fun_connection.php";
    ?>
</head>
<body>
    <?php
        require_once "blocks/site/sct_nav.php";
        require_once "blocks/site/sct_hero.php";
        require_once "blocks/site/sct_benefits.php";
    ?>
    
    <main>
        <?php
            // best sellers
            $_GET['max'] = 12;
            $_GET['title'] = "Os mais vendidos";
            $_GET['subtitle'] = "OS CLIENTES ESCOLHERAM";
            $_GET['paragraph'] = "";
            require "blocks/product/sct_products.php";

            // new products
            $_GET['max'] = 12;
            $_GET['order'] = "id";
            $_GET['title'] = "Novidades da semana";
            $_GET['subtitle'] = "LANÇAMENTOS";
            $_GET['paragraph'] = "Mobiliário para sala, cozinha, quartos, escritórios, casas de banho, exteriores, e muito mais.";
            require "blocks/product/sct_products.php";
            
            // categrories
            require_once "blocks/product/categories.php";

            // best ratings
            $_GET['max'] = 12;
            $_GET['title'] = "Mais bem avaliados";
            $_GET['subtitle'] = "Avaliados";
            $_GET['paragraph'] = "";
            require "blocks/product/sct_products.php";
            
            require_once "blocks/site/sct_newsletter.php";
        ?>
    </main>

    <?php
        require_once "blocks/site/sct_footer.php";
    ?>
</body>
</html>