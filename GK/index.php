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
        <a href="index.php">Trang Chu</a>
        <?php
            if(!isset($_SESSION['login'])){
                echo'<a href="index.php?register">Dang Ky</a>';
                echo'<a href="index.php?login">Dang nhap</a>';

            }else{
                echo'<a href="admin.php">Admin</a>';
                echo'<a href="index.php?logout">Dang xuat</a>';
            }
            
            
            
        ?>


        <?php  
            if(isset($_REQUEST['register'])){
                echo" <h2>Dang Ky</h2>";
                include_once("view/vRegister.php");
            }
            elseif(isset($_REQUEST['login'])){
                echo" <h2>Dang nhap</h2>";
                include_once("view/vLogin.php");
            }
             elseif(isset($_REQUEST['logout'])){
                include_once("view/vLogout.php");
            }
        
        ?>
       
</body>
</html>