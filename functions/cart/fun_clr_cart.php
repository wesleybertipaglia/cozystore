<?php
    // set paths
    $home = "http://localhost/cozzy/";
    $path = realpath("../../");
    
    // clear cart
    session_start();
    unset($_SESSION['cart'], $_SESSION['cart_pos']);

    // return to cart
    header("location: ".$home."pages/store/cart.php");
?>