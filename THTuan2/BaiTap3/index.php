<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
</head>
<body>
    <?php
        $canh1 = $canh2 = $canh3 = $loai = "";
        if(isset($_POST['sbnhandang'])){
            if(is_numeric($_POST['canh1']) && is_numeric($_POST['canh2']) && is_numeric($_POST['canh3']))
            {
                $canh1 = $_POST['canh1'];
                $canh2 = $_POST['canh2'];
                $canh3 = $_POST['canh3'];

                if($canh1 <=0 || $canh2 <=0 || $canh3 <=0){
                    $loai = "Không phải tam giác";
                }
                else if($canh1 == $canh2 && $canh2 == $canh3){
                    $loai = "Tam giác đều";
                }
                else if($canh1 == $canh2 || $canh2 == $canh3 || $canh1 == $canh3){
                    $loai = "Tam giác cân";
                }
                else if(($canh1*$canh1 + $canh2*$canh2 == $canh3*$canh3) || ($canh1*$canh1 + $canh3*$canh3 == $canh2*$canh2) || ($canh2*$canh2 + $canh3*$canh3 == $canh1*$canh1)){
                    $loai = "Tam giác vuông";
                }
                else{
                    $loai = "Tam giác thường";
                }
            }
            else {
                echo "Vui lòng nhập số hợp lệ cho các cạnh.";
            }
        }
    ?>
    <form action="" method = "post">
        <h3>NHẬN DẠNG TAM GIÁC</h3>
        Cạnh 1: <input type="text" name="canh1" required value="<?php echo ($canh1)?>"> (cm)<br><br>
        Cạnh 2: <input type="text" name="canh2" required value="<?php echo ($canh2)?>"> (cm)<br><br>
        Cạnh 3: <input type="text" name="canh3" required value="<?php echo ($canh3)?>"> (cm)<br><br>
        Loại tam giác: <input type="text" name="loai" readonly value="<?php echo $loai ?? ''; ?>"><br><br>
        <input type="submit" name="sbnhandang" value="Nhận dạng">

    </form>
</body>
</html>