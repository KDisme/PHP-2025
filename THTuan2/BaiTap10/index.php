<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 10</title>
</head>
<body>

        <form action="cTinh.php" method="POST">
            <h3>TÍNH TIỀN KARAOKE</h3>
            Giờ bắt đầu: <input type="number" name="giobatdau" required >  (h) <br><br>
            Giờ kết thúc: <input type="number" name="gioketthuc" required > (h) <br><br>
            Tiền thanh toán: <input type="text" name="tienthanhtoan" readonly > (VNĐ) <br><br>
            <input type="submit" name = "sbtinh" value = "Tính tiền"> 
        </form>
</body>
</html>