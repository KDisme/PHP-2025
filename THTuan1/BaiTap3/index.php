<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
</head>
<body>
<?php
$x = rand(1, 100);
$y = rand(1, 100);

function UCLN($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function BCNN($a, $b) {
    return ($a * $b) / UCLN($a, $b);
}

echo "Số thứ nhất: $x<br>";
echo "Số thứ hai: $y<br>";
echo "UCLN($x, $y): " . UCLN($x, $y) . "<br>";
echo "BCNN($x, $y): " . BCNN($x, $y) . "<br>";
?>
</body>
</html>