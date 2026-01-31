<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
</head>
<body>

    <?php
        $canha = $canhb = $canhhuyen = "";
        if(isset($_POST['sbtinh'])){
            if(is_numeric($_POST['canha']) && is_numeric($_POST['canhb']))
            {
                $canha = $_POST['canha'];
                $canhb = $_POST['canhb'];
                $canhhuyen = sqrt($canha * $canha + $canhb * $canhb);
            }
            else {
                echo "Vui lòng nhập số hợp lệ cho cạnh a và cạnh b.";
            }
        }

    ?>
        <form action="" method="POST">
            <H3>CẠNH HUYỀN TAM GIÁC VUÔNG</H3>
            Cạnh A: <input type="text" name="canha" required value="<?php echo ($canha) ?>"> <br> <br>
            Cạnh B: <input type="text" name="canhb" required value="<?php echo ($canhb) ?>"> <br> <br>
            Cạnh Huyền: <input type="text" name="canhhuyen" readonly value="<?php echo ($canhhuyen) ?>"> <br> <br>
            <input type="submit" name="sbtinh" value="Tính">
                
        </form>
</body>
</html>