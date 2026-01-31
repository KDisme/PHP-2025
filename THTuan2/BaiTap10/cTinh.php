<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 10</title>
</head>
<body>
<?php 
    $giobatdau = $gioketthuc = $tienthanhtoan = "";
    if(isset($_POST['sbtinh'])){
        if(is_numeric($_POST['giobatdau']) && is_numeric($_POST['gioketthuc']))
            {
                $giobatdau = $_POST['giobatdau'];
                $gioketthuc = $_POST['gioketthuc'];
                if($gioketthuc > $giobatdau ){
                    if($giobatdau >= 10 && $gioketthuc <= 17){
                        $tienthanhtoan = ($gioketthuc - $giobatdau) * 200000;
                    }
                    else if($giobatdau >= 17 && $gioketthuc <= 24){
                        $tienthanhtoan = ($gioketthuc - $giobatdau) * 450000;
                    }
                    else if($giobatdau < 10 || $gioketthuc > 24){
                       echo "Giờ bắt đầu hoặc giờ kết thúc không hợp lệ";
                    }
                }
                else{
                    echo "Giờ kết thúc phải lớn hơn giờ bắt đầu";
                }

            }
    }

?>
        <form action="cTinh.php" method="POST">
            <h3>TÍNH TIỀN KARAOKE</h3>
            Giờ bắt đầu: <input type="number" name="giobatdau" required value="<?php echo ($giobatdau)?>"> (h) <br><br>
            Giờ kết thúc: <input type="number" name="gioketthuc" required value="<?php echo ($gioketthuc)?>"> (h) <br><br>
            Tiền thanh toán: <input type="text" name="tienthanhtoan" readonly value="<?php echo ($tienthanhtoan)?>"> (VNĐ) <br><br>
            <input type="submit" name = "sbtinh" value = "Tính tiền"> 
        </form>
</body>
</html>