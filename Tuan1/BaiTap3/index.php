<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
</head>
<body>
    <?php
        
        $x = rand(0, 100);
        $y = rand(0, 100);

        do {
            $x = rand(0, 100);
            $y = rand(0, 100);
            $k = rand(0, 10); 
        } while (!($x > $y && $x == $k * $y));

        echo "Giá trị x: " . $x . "<br>";
        echo "Giá trị y: " . $y . "<br>";
        echo "<br>";
        echo "x + y =  " . ($x + $y) . "<br>";
        echo "x - y =  " . ($x - $y) . "<br>";
        echo "x * y =  " . ($x * $y) . "<br>";
        echo "x / y =  " . ($x / $y) . "<br>";
        echo "x % y =  " . ($x % $y) . "<br>";
        
    ?>
</body>
</html>