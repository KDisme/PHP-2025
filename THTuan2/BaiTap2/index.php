<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
      <?php
        $bankinh = $dientich = $chuvi = "";
        if(isset($_POST['sbtinh'])){
            if(is_numeric($_POST['bankinh']))
            {
                $bankinh = $_POST['bankinh'];
                $dientich = 3.14 * $bankinh * $bankinh;
                $chuvi = 3.14 * 2 * $bankinh;
            }
            else {
                echo "Vui lòng nhập số hợp lệ cho bán kính.";
            }
        }
    ?>
    <form action="" method="post">
        <h3>Diện tích chu vi và hình tròn</h3>
        Bán kính: <input type="text" name="bankinh" required value = "<?php echo ($bankinh); ?>" > <br> <br>
        Diện tích: <input type="text" name ="dientich" readonly value = "<?php echo ($dientich); ?>" > <br> <br>
        Chu vi: <input type="text" name ="chuvi" readonly value = "<?php echo ($chuvi); ?>" > <br> <br>

        <input type="submit" name="sbtinh" value="Tính">
    </form>


  
</body>
</html>