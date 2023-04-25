<?php
    // set paths
    $home = "http://localhost/cozzy/";
    $path = realpath("../");

    // database connect
    require $path."/database/fun_connection.php";
    
    session_start();
    try {
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
                }
            }
            else{
                echo "<p>E-mail ou senha inválidos</p>";
                echo "<p>Preencha os campos, clique <a href='$home/cozzy/pages/user/sign_in.php'>aqui</a></p>";
            }
        }
    } catch (PDOException $e) {
        die("Erro: <code>" . $e->getMessage() . "</code>");
    }

    // return to home
    header("location: $home");
?>