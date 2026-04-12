<?php
include_once("controller/cUser.php");
?>
<form action="" method="POST">
    Tai khoan: <input type="text" name="txtTK" required> <br>
    Mat Khau: <input type="password" name="txtMK" required> <br>
    <input type="submit" name="btnDN" value="Dang nhap">
</form>

<?php
$p = new cUser();

if(isset($_REQUEST['btnDN']))
    {
        $kq = $p->cDangnhap($_REQUEST['txtTK'],$_REQUEST['txtMK']);
        if($kq == 1){
            echo"<script>alert('Dang nhap thanh cong'); window.location.href='index.php'</script>";
        }
        else{
            echo"<script>alert('Dang nhap khong thanh cong'); window.location.href='index.php?dangnhap'</script>";
        }

    }
?>
