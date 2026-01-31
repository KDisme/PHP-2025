<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6</title>
</head>
<body>
    <?php
        if(isset($_POST['sbtinh']))
            {
                $n = $_POST['n'];
                $giaithua = 1;
                for ($i = 1; $i <= $n; $i++) {
                $giaithua *= $i;
            }   
            echo "Giai thừa của n = $n là: $giaithua";
                
            }
    ?>
    <form action="" method="POST">
        Nhập n: <input type="number" name="n" required value="<?php echo ($n) ?>">
        <input type="submit" name="sbtinh" value="Tính">
    </form>
</body>
</html>