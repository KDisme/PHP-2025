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
   

        <form  action="xulydangky.php" method = "POST" enctype="multipart/form-data">
        <b>THÔNG TIN ĐĂNG KÝ</b> <br><br>
        <b>Thông tin tài khoản</b> <br>
        Email(*) <input type="email" name="email" required> <br>
        Password(*) <input type="password" name="password" required> <br><br>
        <b>Thông tin cá nhân</b> <br>
        Họ tên(*) <input type="text" name="hoten" required> <br>
        Ảnh đại diện(*) 
        <input type="file" name="anhdaidien"  accept ="image/png, image,jpeg"required> <br>
        Giới tính 
        <input type="radio" name="gioitinh" value="Nam" checked> Nam
        <input type="radio" name="gioitinh" value="Nữ" checked> Nữ <br><br>
        <button type ="submit">Đăng ký</button>
        <button type ="reset">Nhập lại</button>
        </form>
 
</body>
</html>