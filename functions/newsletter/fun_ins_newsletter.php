<?php
    // set paths
    $home = "http://localhost/cozzy/";
    $path = realpath("../../");
    
    if(isset($_POST['usr_name']) && isset($_POST['usr_email'])){
        // set user variables
        $name = $_POST['usr_name'];
        $email = $_POST['usr_email'];
        
        // sql query
        $sql = "
            insert into newsletter (usr_name, usr_email) 
            values ('$name', '$email');
        ";
        $result = $connection->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
    }
    else{
        echo "Erro ao se cadastrar";
    } 

    // return to home
    header("location: $home");
?>