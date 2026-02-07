<?php
session_start();

if(!isset($_SESSION['Register'])){
    header("Location: dangky.php");
    exit();
}

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if(
    $email == $_SESSION['Register']['email'] &&
    $password == $_SESSION['Register']['password']
)
{
    $_SESSION['user'] = $_SESSION['Register'];
    header("Location: index.php");
} else {
    echo "sai thông tin đăng nhập <br>";
    echo "<a href='dangnhap.php'>Quay lại</a>";
}
        
?>