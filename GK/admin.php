<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo"<script>alert('Ban khong co quyen truy cap'); window.location.href='index.php?login'</script>";
        exit;
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
    Trang ADMIN
    <a href="index.php">Trang Chu</a> <br>
    <a href="index.php?logout" onclick="return confirm('Bạn muốn đăng xuất?')">Đăng xuất</a>

    
</body>
</html>
