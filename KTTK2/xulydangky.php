<?php
session_start();
require_once 'db.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$hoten = $_POST['hoten'] ?? '';
$gioitinh = $_POST['gioitinh'] ?? '';

$anh = $_FILES['anhdaidien'];
$ext = strtolower(pathinfo($anh['name'], PATHINFO_EXTENSION));

if (!in_array($ext, ['png', 'jpg', 'jpeg'])) {
    die("File không hợp lệ. Vui lòng tải lên ảnh PNG, JPG hoặc JPEG.");
}

$xyz = rand(100, 999);
$newname = pathinfo($anh['name'], PATHINFO_FILENAME);
$tenfile = $newname . $xyz . '.' . $ext;

move_uploaded_file($anh['tmp_name'], 'image/anhdaidien' . $tenfile);

$stmt = mysqli_prepare($conn, "INSERT INTO taikhoan (email, password, hoten, anhdaidien, gioitinh) VALUES (?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sssss", $email, $password, $hoten, $tenfile, $gioitinh);

if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="index.php">Trang chủ</a><br>
        <a href="dangky.php">Đăng ký</a><br><br>
        
        Email: <?= htmlspecialchars($email) ?> <br>
        Họ tên: <?= htmlspecialchars($hoten) ?> <br>
        Giới tính: <?= htmlspecialchars($gioitinh) ?> <br>

        Chuc mừng bạn đã đăng ký thành công! <br>
        <a href="dangnhap.php">Click vào đây để đăng nhập hệ thống</a>
    </body>
    </html>
<?php
} else {
    echo "Lỗi: " . mysqli_error($conn);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>


