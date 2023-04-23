<?php
    if(isset($_POST['usr_name']) && isset($_POST['usr_email'])){
        $name = $_POST['usr_name'];
        $email = $_POST['usr_email'];
        
        $sql = "
            insert into newsletter (usr_name, usr_email) 
            values ('$name', '$email');
        ";
        $result = $connection->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<p>Cadastro realizado com sucesso!".$_POST['usr_name']."</p>";
        header("location: $home");
    }
    else{
        echo "Erro ao cadastrar";
        header("location: $home");
    } 
?>