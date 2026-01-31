<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <?php
                for ($i = 2; $i <= 10; $i++) {
                    echo "<th>Bảng $i</th>";
                }
            ?>
        </tr>
        <?php
            for ($j = 1; $j <= 10; $j++) {
                echo "<tr>";
                for ($i = 2; $i <= 10; $i++) {
                    echo "<td>$i x $j = " . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>