<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5</title>
</head>
<body>
    <?php
        $a = $b = $nghiem = "";
        if(isset($_POST['sbtinh'])){
            if(is_numeric($_POST['a']) && is_numeric($_POST['b']))
            {
               $a = $_POST['a'];
               $b = $_POST['b'];
               $nghiem = "x = " . (-$b/$a); 
            }
            else {
                echo "Vui lòng nhập số hợp lệ cho a và b.";
            }
        }
    ?>
    <form action="" method="POST">
        <h3>GIẢI PHƯƠNG TRÌNH BẬC NHẤT</h3>
        Phương trình: <input type="text" name="a" required value="<?php echo ($a) ?>"> x + <input type="text" name="b" required value="<?php echo ($b) ?>"> = 0 <br><br>
        Nghiệm:  <input type="text" name="nghiem" readonly value = "<?php echo ($nghiem) ?>"> <br> <br>
        <input type="submit" name="sbtinh" value="Giải Phương Trình">
    </form>
</body>
</html>