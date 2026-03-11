<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Trang chủ</a> <br>
    <?php if(!isset($_SESSION['user'])){ ?>
       <a href="dangky.php">Đăng ký</a> <BR></BR>
    <?php } else { ?>
        <a href="dangxuat.php">Đăng xuất</a>
    <?php } ?>

    <?php
    if(isset($_SESSION['user'])){ ?>
        Chào mừng <?= $_SESSION['user']['hoten'] ?> đến với lớp PHP <br>
        <img src="image/anhdaidien<?= $_SESSION['user']['anhdaidien'] ?>" witdh =100 height=100> <br>
    <?php } else { ?>
        Nguyễn Hoàng Khánh Duy - 22653721 <br>
    <?php } ?>
</body>
</html>