<?php
    // set paths
    $home = "http://localhost/cozzy/";
    $path = realpath("../../");
    
    // insert in cart
    session_start();
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
        $_SESSION['cart_pos'] = 0;
    } else {
        $_SESSION['cart_pos']++;
    }
    array_push($_SESSION['cart'], $_GET['add']);
    
    // return to cart
    header("location: ".$home."pages/store/cart.php");
?>