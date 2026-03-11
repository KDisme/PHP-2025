<?php
session_start();
require_once "db.php";

$email =  trim ($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

$stmt = mysqli_prepare($conn, "SELECT * FROM taikhoan WHERE email = ? AND password = ?");
mysqli_stmt_bind_param($stmt, "ss", $email, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);
mysqli_close($conn);

if ($user && $password == $user['password']) {
    $_SESSION['user'] = [
        'email' => $user['email'],
        'hoten' => $user['hoten'],
        'gioitinh' => $user['gioitinh'],
        'anhdaidien' => $user['anhdaidien']
    ];
    header("Location: index.php");
    exit();
} else {
    echo "Sai thông tin đăng nhập <br>";
    echo "<a href='dangnhap.php'>Quay lại</a>";
}
