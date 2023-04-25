<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        // set paths
        $home = "http://localhost/cozzy/";
        $path = realpath("../../");

        session_start();
        $usr_name = $_SESSION['usr_name'];
        
        require_once $path."/blocks/site/sct_head.php"; 
        require_once $path."/functions/database/fun_connection.php";
    ?>
    <title>Cozzy | <?php echo $usr_name; ?></title>
</head>
<body>
    <?php require_once $path."/blocks/site/sct_nav.php"; ?>
    <main>
        <?php require_once $path."/blocks/user/sct_profile.php"; ?>
    </main>
    <?php require_once $path."/blocks/site/sct_footer.php"; ?>
</body>
</html>