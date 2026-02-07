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
    <a href="index.php">Trang chủ</a>
    <?php if(!isset($_SESSION['user'])){ ?>
       <a href="dangky.php">Đăng ký</a>
    <?php } else { ?>
        <a href="dangxuat.php">Đăng xuất</a>
    <?php } ?>
    <hr>
    <?php
    if(isset($_SESSION['user'])){
        echo "Chào mừng {$_SESSION['user']['hoten']} đến với lớp PHP <br>";
        echo "<img src='image/{$_SESSION['user']['anhdaidien']}' width='100' height='100'><br>";
    } else {
        echo "Nguyễn Hoàng Khánh Duy - 22653721<br>";
    }

    ?>
</body>
</html>