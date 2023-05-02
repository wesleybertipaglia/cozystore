<?php
    // setup
    require_once "../../config.php";
    require_once $path_functions."database/fun_connection.php"; 
    
    // clear cart
    session_start();
    unset($_SESSION['cart'], $_SESSION['cart_total'], $_SESSION['cart_pos']);

    // return to cart
    header("location: ".$home."pages/store/cart.php");
?>