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
    
   
    
    <?php
        if(isset($_SESSION['login']) && isset($_SESSION['role']) == 1){
            echo'<a href="index.php?upload">Up Load</a> |';
            echo'<a href="index.php?dangxuat"> Dang Xuat</a>';

        }else{
            echo'<a href="index.php?dangky">Dang Ky</a> |';
            echo'<a href="index.php?dangnhap">Dang nhap</a> ';
        }
    ?>
    
    <?php
        if(isset($_REQUEST['dangky'])){
            include_once("view/vDangky.php");
        }
        elseif(isset($_REQUEST['dangnhap'])){
            include_once("view/vDangnhap.php");
        }
        elseif(isset($_REQUEST['upload'])){
            include_once("view/vUpload.php");
        }
        elseif(isset($_REQUEST['dangxuat'])){
            include_once("view/vDangxuat.php");
        }
        
    ?>
    
</body>
</html>