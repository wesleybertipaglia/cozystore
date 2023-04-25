<?php
    // set paths
    $home = "http://localhost/cozzy/";
    $path = realpath("../");

    // database connect 
    require_once $path."/database/fun_connection.php";
    
    session_start();
    if(isset($_GET['usr_del'])){
        // set user variables
        $usr_id = $_GET['usr_del'];
        // sql query
        $sql = "
            delete from users where id = $usr_id;
        ";
        $result = $connection->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        // sign out
        unset(
            $_SESSION['status'],
            $_SESSION['usr_name'],
            $_SESSION['usr_type'],
            $_SESSION['usr_id']
        );
    }
    // return to home
    header("location: $home");
?>