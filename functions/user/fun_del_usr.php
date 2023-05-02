<?php
    // setup
    require_once "../../config.php";
    require_once $path."functions/database/fun_connection.php"; 
    session_start();
    
    if(isset($_GET['del'])){
        // sql query
        $usr_id = $_GET['del'];
        $sql = "
            delete from users where id = $usr_id;
        ";
        $result = $connection->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        // verify adm delete
        if($usr_id == $_SESSION['usr_id']) {
            // sign out
            unset(
                $_SESSION['status'],
                $_SESSION['usr_name'],
                $_SESSION['usr_type'],
                $_SESSION['usr_id']
            );

            // return to home
            header("location: $home");
        } else {
            // return to user list
            header("location: ".$home."pages/adm/users/adm_users.php");
        }

    }
?>