<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 7</title>
</head>
<body>
    <form method="post">
        Nhập số phần tử n: <input type="number" name="n" min="1" required>
        <input type="submit" value="Tạo mảng">
    </form>

    <?php
    function xuatMang($arr) {
        echo implode(", ", $arr);
    }

    function demChan($arr) {
        $count = 0;
        foreach ($arr as $value) {
            if ($value % 2 == 0) $count++;
        }
        return $count;
    }

    function tongLe($arr) {
        $sum = 0;
        foreach ($arr as $value) {
            if ($value % 2 != 0) $sum += $value;
        }
        return $sum;
    }

    function giaTriLonNhat($arr) {
        return max($arr);
    }

    function giaTriNhoNhat($arr) {
        return min($arr);
    }

    function daoNguocMang($arr) {
        return array_reverse($arr);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['n'])) {
        $n = intval($_POST['n']);
        $arr = array();
        for ($i = 0; $i < $n; $i++) {
            $arr[] = rand(0, 100);
        }
        echo '<h3>Mảng vừa tạo:</h3>';
        xuatMang($arr);

        echo '<br><b>Số phần tử chẵn:</b> ' . demChan($arr);
        echo '<br><b>Tổng các số lẻ:</b> ' . tongLe($arr);
        echo '<br><b>Giá trị lớn nhất:</b> ' . giaTriLonNhat($arr);
        echo '<br><b>Giá trị nhỏ nhất:</b> ' . giaTriNhoNhat($arr);
        echo '<br><b>Mảng đảo ngược:</b> ';
        xuatMang(daoNguocMang($arr));
    }
    ?>
</body>
</html>