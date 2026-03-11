<?php
$conn = mysqli_connect('localhost', 'kttk2','12345', 'kttk2');
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
mysqli_set_charset($conn, 'utf8mb4');
?>