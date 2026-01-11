<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
    <style type="text/css">
    body {
        margin: auto;
        padding-left: 100px;
        padding-top: 20px;
    }
    .a_0 {
        font-weight: bold;
    }
    .a_1 {
        font-weight: normal;
        font-style: italic;
    }
</style>
</head>
<body>
    <?php
    for ($i = 0; $i < 31; $i++) {
        echo '<span class="a_' . ($i % 2) . '">' . $i . '</span>';
    }
?>
</body>
</html>