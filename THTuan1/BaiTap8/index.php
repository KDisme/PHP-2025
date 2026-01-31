<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 8</title>
</head>
<body>
    <?php
        $list = array("alpha", "beta", "gamma", "delta", "epsilon");
        foreach ($list as $value) {
            echo"<ul>";
            echo "<li>$value</li>";
            echo "</ul>";
        }
    ?>
</body>
</html>