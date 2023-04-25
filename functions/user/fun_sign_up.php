<?php
    // set paths
    $home = "http://localhost/cozzy/";
    $path = realpath("../");

    // database connect 
    require_once $path."/database/fun_connection.php";
    
    session_start();
    if(isset($_POST['usr_email']) && isset($_POST['usr_pass'])){
        // set user variables
        $fullname = $_POST['usr_fullname'];
        $name = $_POST['usr_name'];
        $email = $_POST['usr_email'];
        $pass = $_POST['usr_pass'];
        $terms = $_POST['usr_terms'];
        
        // sql query
        $sql = "
            insert into users (usr_fullname, usr_name, usr_email, usr_pass, usr_term, usr_type) 
            values ('$fullname', '$name', '$email', '$pass', '$terms', 2);
        ";
        $result = $connection->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        
        // set user session
        $_SESSION['status']='Entrou';
        $_SESSION['usr_name']=$name;
        $_SESSION['usr_type'] = 2;
        $_SESSION['usr_id'] = $connection->lastInsertId();

        // return to home
        header("location: $home");
    }
    else{
        // return to home
        header("location: $home");
    } 
?>