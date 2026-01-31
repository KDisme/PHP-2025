<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 9</title>
</head>
<body>
    <?php
        
        $toan = $ly = $hoa = $diemchuan = $tongdiem = $ketqua = "";
        if(isset($_POST['xemketqua'])) {
            $toan = $_POST['toan'];
            $ly = $_POST['ly'];
            $hoa = $_POST['hoa'];
            $diemchuan = 20;
            $tongdiem = $toan + $ly + $hoa;
            
            if($toan > 0 && $ly > 0 && $hoa > 0 && $tongdiem >= $diemchuan) {
                $ketqua = "Đậu";
            } else {
                $ketqua = "Rớt";
            }
        }
    ?>
    <form action="" method="POST">
        <h3>KẾT QUẢ THI ĐẠI HỌC</h3>
        Toán: <input type="text" name="toan" required value="<?php echo ($toan) ?>"> <br><br>
        Lý: <input type="text" name="ly" required value="<?php echo ($ly) ?>"> <br><br>
        Hóa: <input type="text" name="hoa" required value="<?php echo ($hoa) ?>"> <br><br>
        Điểm chuẩn: <input type="text" name="diemchuan" readonly value="20"> <br><br>
        Tổng điểm: <input type="text" name="tongdiem" readonly value="<?php echo ($tongdiem) ?>"> <br><br>
        Kết quả thi: <input type="text" name="ketqua" readonly value="<?php echo ($ketqua) ?>"> <br><br>
        <input type="submit" name="xemketqua" value="Xem kết quả">
    </form>
</body>
</html>