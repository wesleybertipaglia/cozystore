<?php
    session_start();
    $_SESSION['cart'] = "";
    header("location: ".$home."pages/store/cart.php");
?>