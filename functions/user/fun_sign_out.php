<?php 
    $home = "http://localhost/cozzy/";
    session_start();
    $_SESSION['status'] = null;
    $_SESSION['usr_name'] = null;
    $_SESSION['usr_type'] = null;
    $_SESSION['usr_id'] = null;
    header("location: $home");
?>