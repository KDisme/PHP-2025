<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
</head>
<body>
<?php
$chieudai = $chieurong = $dientich = "";
if (isset($_POST['sbtinh'])) {
    if(is_numeric($_POST['chieudai']) && is_numeric($_POST['chieurong'])) {
        $chieudai = $_POST['chieudai'];
        $chieurong = $_POST['chieurong'];
        $dientich = $chieudai * $chieurong;
    }
    else {
        echo "Vui lòng nhập số hợp lệ cho chiều dài và chiều rộng.";
  
}
}
?>
<form action ="" method ="Post">
    <h3>
        Diện tích hình chữ nhật
    </h3>
    Chiều dài : <input type="text" name="chieudai" required value="<?php echo ($chieudai); ?>"><br><br>
    Chiều rộng : <input type="text" name="chieurong" required value="<?php echo ($chieurong); ?>"><br><br>
    Diện tích : <input type="text" name="dientich" readonly value="<?php echo ($dientich); ?>"><br><br>
    <input type="submit" name="sbtinh" value="Tính">
</form>


</body>
</html>