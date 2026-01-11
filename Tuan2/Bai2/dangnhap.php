<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
    <div style="background: #888; color: #fff; text-align: center; padding: 20px 0; font-weight: bold;">
        BANNER WEBSITE
    </div>

    <div style="display: flex; border: 1px solid #ccc; min-height: 300px;">
       
        <div style="width: 180px; background: #f5f5f5; padding: 20px; border-right: 1px solid #ccc;">
            <b>Menu</b><br>
            <a href="./index.php">Trang chủ</a><br>
            <a href="./index.php">Đăng ký</a><br>
            <a href="./dangnhap.php">Đăng nhập</a>
        </div>
    
        <div style="flex: 1; padding: 30px;">
            <form method="post" action="#">
                <fieldset style="width: 350px; margin: 0 auto;">
                    <legend style="font-weight: bold; text-align: center;">THÔNG TIN ĐĂNG NHẬP</legend>
                    <table>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="txtemail" required style="width: 180px;"></td> 
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="txtpassword" required style="width: 180px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="checkbox" name="remember"> Nhớ thông tin đăng nhập
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="sbdangnhap" value="Đăng nhập" style="background: #222; color: #fff; padding: 5px 15px;">
                                <button type="reset">Làm lại</button>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>
    </div>

    <div style="background: #888; color: #fff; text-align: center; padding: 10px 0;">
        Footer.website
    </div>

    <?php
        if (isset($_REQUEST["sbdangnhap"])) {
            $email = $_POST["txtemail"];
            $password = $_POST["txtpassword"];
            if ($email == "abc@gmail.com" && $password == "12345") {
                echo '<h2>Chúc mừng đăng nhập thành công!</h2>';
            } else {
                echo '<h2>Đăng nhập thất bại</h2>';
            }
        }
    ?>
</body>
</html>