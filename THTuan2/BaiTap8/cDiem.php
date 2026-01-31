<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php 
        
        $diemhk1 = $diemhk2 = $diemtb = $ketqua = $xeploai = "";
        if(isset($_POST['sbtinh'])) {
            if(is_numeric($_POST['diemhk1']) && is_numeric($_POST['diemhk2'])) {
            $diemhk1 = $_POST['diemhk1'];
            $diemhk2 = $_POST['diemhk2'];
            $diemtb = ($diemhk1 + $diemhk2) / 2;
           
            if($diemtb >= 5) {
                $ketqua = "Được lên lớp";
            } else {
                $ketqua = "Ở lại lớp";
            }
    
            if($diemtb >= 8) {
                $xeploai = "Giỏi";
            } elseif($diemtb >= 6.5) {
                $xeploai = "Khá";
            } elseif($diemtb >= 5) {
                $xeploai = "Trung bình";
            } else {
                $xeploai = "Yếu";
            }
        }
        else {
            echo "Vui lòng nhập số hợp lệ cho điểm học kỳ 1 và học kỳ 2.";
        }
        }
    ?>
        <form action="cDiem.php" method="POST">
            <H3>KẾT QUẢ HỌC TẬP</H3>
            Điểm HK1: <input type="text" name="diemhk1" required value="<?php echo ($diemhk1)?>"> <br> <br>
            Điểm HK2: <input type="text" name="diemhk2" required value="<?php echo ($diemhk2)?>"> <br> <br>
            Điểm Trung Bình: <input type="text" name="diemtb" readonly value="<?php echo ($diemtb)?>"> <br> <br>
            Kết quả: <input type="text" name="ketqua" readonly value="<?php echo ($ketqua)?> "> <br> <br>
            Xếp loại học lực: <input type="text" name="xeploai" readonly value="<?php echo ($xeploai)?> "> <br> <br>
            <input type="submit", name="sbtinh" value="Xem Kết Quả">
        </form>
</body>
</html>