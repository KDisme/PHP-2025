<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5</title>
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>i</th>
            <th>Kết quả</th>
        </tr>
        <?php
        for ($i = 0; $i <= 10; $i++) {
            if ($i == 0) {
                $result = 0;
            } else {
                $result = pow($i, $i+1);
            }
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td style='text-align: center;'>" . number_format($result, 0, '', ',') . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>