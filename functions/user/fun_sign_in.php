<?php
    $home = "http://localhost/cozzy/";
    $path = realpath("../../");
    require_once "../fun_connection.php";
    session_start();

    if(isset($_POST['usr_email']) && isset($_POST['usr_pass'])){
        $usr_email = $_POST['usr_email'];
        $usr_pass = $_POST['usr_pass'];
        
        $sql = "select * from users where usr_email='$usr_email' and usr_pass='$usr_pass'";
        $result = $connection->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        if($data != null) {
            foreach ($data as $row) {
                $_SESSION['status']='Entrou';
                $_SESSION['usr_name']=$row['usr_name'];
                $_SESSION['usr_type'] = $row['usr_type'];
                $_SESSION['usr_id'] = $row['id'];
                
                echo "<p>Login realizado com sucesso! ".$_SESSION['usr_name']."</p>";
                header("location: $home");
            }
        }
        else{
            echo "<p>E-mail ou senha inválidos</p>";
            echo "<p>Preencha os campos, clique <a href='$home/pages/user/sign_in.php'>aqui</a></p>";
        }
    }
    else{
        header("location: $home");
    } 
?>