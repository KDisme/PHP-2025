<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

        <a href="index.php">Trang chủ</a> <br>
       <a href="dangnhap.php">Đăng nhập</a> <br> <br>
  

        <form  action="xulydangnhap.php" method = "POST">
        <b>ĐĂNG NHẬP</b> <br><br>
        Email <input type="email" name="email" required> <br>
        Password <input type="password" name="password" required> <br><br>
        <button type ="submit" value ="Đăng nhập">Đăng nhập</button>
         <button type ="reset" value ="Nhập lại">Nhập lại</button>
        </form>
    
</body>
</html>