<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
</head>
<body>

    <form method="post" action="">
        <table border="1" cellpadding="5" style="margin: 100px auto; border-collapse: collapse;">
            <tr>
                <td>a = <input type="text" name="a" value="<?php echo isset($_POST['a']) ?  $_POST['a'] : ''; ?>" required style="width: 100px;"></td>
                <td>b = <input type="text" name="b" value="<?php echo isset($_POST['b']) ?  $_POST['b'] : ''; ?>" required style="width: 100px;"></td>
                <td>
                    <button type="submit" name="op" value="cong">+</button>
                    <button type="submit" name="op" value="tru">-</button>
                    <button type="submit" name="op" value="nhan">*</button>
                    <button type="submit" name="op" value="chia">/</button>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center; font-weight: bold;">
                    Kết quả: 
                    <?php
                        if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['op']) && $_POST['a'] !== '' && $_POST['b'] !== '') {
                            $a = $_POST['a'];
                            $b = $_POST['b'];
                            $op = $_POST['op'];
                            if (!is_numeric($a) || !is_numeric($b)) {
                                echo 'Vui lòng nhập số hợp lệ!';
                            } else {
                                switch ($op) {
                                    case 'cong': $result = $a + $b; echo "$a + $b = $result"; break;
                                    case 'tru': $result = $a - $b; echo "$a - $b = $result"; break;
                                    case 'nhan': $result = $a * $b; echo "$a * $b = $result"; break;
                                    case 'chia':
                                        if ($b == 0) echo 'Không chia được cho 0';
                                        else {
                                            $result = $a / $b;
                                            echo "$a / $b = $result";
                                        }
                                        break;
                                }
            
                            }
                        } else {
                            echo '';
                        }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>