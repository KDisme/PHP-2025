<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
</head>
<body>
    <?php
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr>
                <th>STT</th>
                <th>Tên sách</th>
                <th>Nội dung sách</th>
              </tr>";
        for ($i = 1; $i <= 100; $i++) {
            echo "<tr>
                    <td>$i</td>
                    <td>Tensach$i</td>
                    <td>Noidung$i</td>
                  </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>