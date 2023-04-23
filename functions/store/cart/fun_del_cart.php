<?php
    if(isset($_GET['id'])) {
        session_start();
        $_SESSION['cart'] =  $_SESSION['cart'].$_GET['id'].",";
        header("location: ".$home."pages/store/cart.php");
    } else {
        header("location: ".$home."pages/store/cart.php");
    }
?>