<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Trang Chu</a> |
    <a href="index.php?dangky">Dang Ky</a> |    
    <?php
        if(isset($_SESSION['login'])){
            
        }
    ?>

    <?php
        if(isset($_REQUEST['dangky'])){
            include_once("view/vRegister.php");
        }
    ?>
</body>
</html>