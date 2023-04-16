<?php
    $name = $_POST['usr_name'];
    $email = $_POST['usr_email'];
    $pass = $_POST['usr_pass'];
    $type = $_POST['usr_type'];

    // connection
    require_once("fun_connect_db.php");
    session_start();

    try {
        $sql = "insert into users (name, pass, email, type) values ('$name', '$pass', '$email', $type)";
        $query=$connection->prepare($sql);
        $query->execute();
        $rs = $connection->lastInsertId();
        echo ("Conta cadastrada com sucesso");

        $_SESSION['status']='Entrou';
        $_SESSION['usr_name']=$row['name'];
        $_SESSION['usr_type'] = $row['type'];
        $_SESSION['usr_id'] = $row['id'];

        header("Location: ../index.php");
    }
    catch(PDOException $i) {
        die("Erro: <code>".$i->getMessage()."</code>");
    }
?>