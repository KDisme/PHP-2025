<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5</title>
    <link rel="stylesheet" href="dangky.css">
</head>
<body>
    <div class="container">
        <header>BANNER WEBSITE</header>
        <div class="main">
            <nav>
                <b>Menu</b><br>
                <a href="./index.php">Trang chủ</a><br>
                <a href="./dangky.php">Đăng ký</a><br>
                <a href="./index.php">Đăng nhập</a>
            </nav>
            <div class="content">
                <form method="post" action="" style="max-width: 600px; margin: 0 auto;">
    
                        <legend style="font-weight: bold; text-align: center;">THÔNG TIN ĐĂNG KÝ</legend>
                        <table style="width: 100%;">
                            <tr>
                                <td>Thông tin tài khoản</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" required style="width: 250px;"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" required style="width: 250px;"></td>
                            </tr>
                            <tr>
                                <td>Nhập lại password</td>
                                <td><input type="password" name="repassword" required style="width: 250px;"></td>
                            </tr>
                            <tr>
                                <td>Thông tin cá nhân</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Họ tên</td>
                                <td><input type="text" name="hoten" required style="width: 250px;"></td>
                            </tr>
                            <tr>
                                <td>Quê quán</td>
                                <td>
                                    <select name="quequan" style="width: 250px;">
                                        <option value="">Chọn Tỉnh/Thành phố</option>
                                        <option value="Hà Nội">Hà Nội</option>
                                        <option value="TP.HCM">TP.HCM</option>
                                        <option value="Đà Nẵng">Đà Nẵng</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Điện thoại</td>
                                <td><input type="text" name="dienthoai" style="width: 250px;"></td>
                            </tr>
                            <tr>
                                <td>Giới tính</td>
                                <td>
                                    <input type="radio" name="gioitinh" value="Nam"> Nam
                                    <input type="radio" name="gioitinh" value="Nữ"> Nữ
                                </td>
                            </tr>
                            <tr>
                                <td>Sở thích</td>
                                <td>
                                    <input type="checkbox" name="sothich[]" value="Màu xanh"> Màu xanh
                                    <input type="checkbox" name="sothich[]" value="Màu đỏ"> Màu đỏ
                                    <input type="checkbox" name="sothich[]" value="Đăng quà"> Đăng quà
                                    <input type="checkbox" name="sothich[]" value="Cao nguyên"> Cao nguyên
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name = "sbdangky" value="Đăng ký" style="background: #222; color: #fff; padding: 5px 15px;">
                                    <input type="reset" value="Làm lại">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </div>
        </div>
        <footer>Footer.website</footer>
    </div>

    <?php
        if(isset($_POST['sbdangky'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            $hoten = $_POST['hoten'];
            $quequan = $_POST['quequan'];
            $dienthoai = $_POST['dienthoai'];
            $gioitinh = isset($_POST['gioitinh']) ? $_POST['gioitinh'] : '';
            $sothich = isset($_POST['sothich']) ? $_POST['sothich'] : [];

            if ($password !== $repassword) {
                echo '<p style="color: red; text-align: center;">Password và Nhập lại password không khớp!</p>';
            } else {    
                echo"email: $email<br>";
                echo"password: $password<br>";
                echo"hoten: $hoten<br>";
                echo"quequan: $quequan<br>";
                echo"dienthoai: $dienthoai<br>";
                echo"gioitinh: $gioitinh<br>";
                echo"sothich: " . implode(", ", $sothich) . "<br>";
                
            }
        }
    ?>
</body>
</html>