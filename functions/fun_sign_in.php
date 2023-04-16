<?php
    session_start();
    if(isset($_POST['usr_email']) && isset($_POST['usr_pass'])){
        $usr_email = $_POST['usr_email'];
        $usr_pass = $_POST['usr_pass'];
        require_once "fun_connect_db.php";

        $sql = "select * from users where email='$usr_email' and password='$usr_pass'";
        $result = $connection->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        
        if($data != null) {
            foreach ($data as $row) {
                $_SESSION['status']='Entrou';
                $_SESSION['usr_name']=$row['name'];
                $_SESSION['usr_type'] = $row['type'];
                $_SESSION['usr_id'] = $row['id'];
                
                echo "<p>Login realizado com sucesso!".$_SESSION['usr_name']."</p>";
                header("location: ../index.php");
            }
        }
        else{
            //se não encontrou, mostrar mensagem de erro e não acessar o sistema
            echo "<p>E-mail ou senha inválidos</p>";
            echo "<p>Preencha os campos, clique <a href='../index.php/pages/sign_in.php'>aqui</a></p>";
        }
    }
    else{
        header("location: ../index.php");
    } 
?>