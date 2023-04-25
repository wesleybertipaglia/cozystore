<?php
    // set paths
    $home = "http://localhost/cozzy/";
    $path = realpath("../../");
    
    // remove item
    session_start();
    unset($_SESSION['cart'][$_GET['remove']]);

    // return to cart
    header("location: ".$home."pages/store/cart.php");
?>
