<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Bài 4</title>
</head>
<body>

        <b>Thông tin chi tiết tác giả</b><br>
        <?php
            if(isset($_GET['ten']) && isset($_GET['tuoi'])){
                $ten = $_GET['ten'];
                $tuoi = $_GET['tuoi'];
                echo "Xin chào $ten - $tuoi tuổi! <br>";
            }
            else {
                echo "Không có thông tin tác giả!";
            }
        ?>
</body>
</html>