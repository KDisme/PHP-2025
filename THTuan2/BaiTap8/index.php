<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 8</title>
</head>
<body>


        <form action="cDiem.php" method="POST">
            <H3>KẾT QUẢ HỌC TẬP</H3>
            Điểm HK1: <input type="text" name="diemhk1" required > <br> <br>
            Điểm HK2: <input type="text" name="diemhk2" required > <br> <br>
            Điểm Trung Bình: <input type="text" name="diemtb" readonly > <br> <br>
            Kết quả: <input type="text" name="ketqua" readonly > <br> <br>
            Xếp loại học lực: <input type="text" name="xeploai" readonly > <br> <br>
            <input type="submit", name="sbtinh" value="Xem Kết Quả">
        </form>
</body>
</html>