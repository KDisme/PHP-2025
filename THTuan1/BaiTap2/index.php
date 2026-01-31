<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
    <?php
       $x = rand();
       $y = rand();
       if ($x > $y) {
        echo "Số x: $x<br>";
        echo "Số y: $y<br>";
    } 
        else {
        echo "Số x: $y<br>";
        echo "Số y: $x<br>";
    }
    ?>
</body>
</html>