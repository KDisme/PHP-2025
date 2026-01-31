<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 9</title>
</head>
<body>

    <form action="cDiem.php" method="POST">
        <h3>KẾT QUẢ THI ĐẠI HỌC</h3>
        Toán: <input type="text" name="toan" required > <br><br>
        Lý: <input type="text" name="ly" required > <br><br>
        Hóa: <input type="text" name="hoa" required > <br><br>
        Điểm chuẩn: <input type="text" name="diemchuan" readonly value="20"> <br><br>
        Tổng điểm: <input type="text" name="tongdiem" readonly > <br><br>
        Kết quả thi: <input type="text" name="ketqua" readonly > <br><br>
        <input type="submit" name="xemketqua" value="Xem kết quả">
    </form>
</body>
</html>