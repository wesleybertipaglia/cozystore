<?php 
    // set paths
    $home = "http://localhost/cozzy/";
    $path = realpath("../");

    // unset user variables
    session_start();
    unset(
        $_SESSION['status'],
        $_SESSION['usr_name'],
        $_SESSION['usr_type'],
        $_SESSION['usr_id']
    );
    
    // return to home
    header("location: $home");
?>