<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5</title>
</head>
<body>
    <?php
        $currentYear = date("Y");
        echo '<select name="nam">';
        for ($year = 1900; $year <= $currentYear; $year++) {
            echo "<option value='$year'>$year</option>";
        }
        echo '</select>';
    ?>
</body>
</html>