<?php
    $home = "http://localhost/cozzy/";
    $path = realpath("../../");
    require_once "../fun_connection.php";
    session_start();
    
    if(isset($_POST['usr_email']) && isset($_POST['usr_pass'])){
        $fullname = $_POST['usr_fullname'];
        $name = $_POST['usr_name'];
        $email = $_POST['usr_email'];
        $pass = $_POST['usr_pass'];
        $terms = $_POST['usr_terms'];
        
        $sql = "
            insert into users (usr_fullname, usr_name, usr_email, usr_pass, usr_term, usr_type) 
            values ('$fullname', '$name', '$email', '$pass', '$terms', 2);
        ";
        $result = $connection->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        
        session_start();
        $_SESSION['status']='Entrou';
        $_SESSION['usr_name']=$name;
        $_SESSION['usr_type'] = 2;
        $_SESSION['usr_id'] = $connection->lastInsertId();
        
        echo "<p>Cadastro realizado com sucesso!".$_SESSION['usr_name']."</p>";
        header("location: $home");
    }
    else{
        echo "Erro ao cadastrar";
        header("location: $home");
    } 
?>