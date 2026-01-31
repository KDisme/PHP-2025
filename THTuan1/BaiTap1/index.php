<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
</head>
<body>
    <?php
        $x = rand();
        do {
            $y = rand();
        } while ($y < 50 || $y > 100);
        echo "Số ngẫu nhiên x là: " . $x;
        echo "<br>Số ngẫu nhiên y là: " . $y;
    ?>
</body>
</html>