<?php
    // include info
    $title = "Usuários";

    // query info
    $sql = "select * from users;";
    $data;

    // query
    try {
        $result = $connection->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Erro: <code>" . $e->getMessage() . "</code>");
    }
?>

<section>
    <div class="sect-content">
        <div class="sect-header">
            <h2><?php echo $title ?></h2>
        </div>

        <table>
            <thead>
                <th>id</th>
                <th>Usuario</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Tipo</th>
                <th colspan="2">Opções</th>
            </thead>

            <tbody>
                <?php foreach ($data as $row) { ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['usr_name'] ?></td>
                        <td><?php echo $row['usr_fullname'] ?></td>
                        <td><?php echo $row['usr_email'] ?></td>
                        <td><?php echo $row['usr_type'] ?></td>
                        <td><a href="<?php echo $home.'functions/user/fun_edt_usr.php?edt='.$row['id']; ?>">Editar</a></td>
                        <td><a href="<?php echo $home.'functions/user/fun_del_usr.php?del='.$row['id']; ?>">Deletar</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>