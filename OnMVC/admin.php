<?php
    session_start();
    if(!isset($_SESSION['login'])){
         echo"<script>alert('Ban khong co quyen truy cap'); window.location.href='index.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="admin.php">Trang admin</a> | 
    <a href="admin.php?logout">Dang xuat</a> <br>
    <a href="admin.php?themsp">Them San Pham</a> 
    <?php
        if(isset($_REQUEST['logout'])){
            include_once("view/vLogout.php");
        }elseif(isset($_REQUEST['themsp'])){
            include_once("view/vThemsp.php");
        }elseif(isset($_REQUEST['suasp'])){
            include_once("view/vUpdate.php");
        }elseif(isset($_REQUEST['xoasp'])){
            include_once("view/vXoa.php");
        }else{
            include_once("view/vListSP.php");
        }
    ?>

</body>
</html>