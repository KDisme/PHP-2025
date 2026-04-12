<?php
include_once("controller/cUser.php");
?>
<form action="" method="POST">
    Tai khoan: <input type="text" name="txtTK" required> <br>
    Mat Khau: <input type="password" name="txtMK" required> <br>
    <input type="submit" name="btnDK" value="Dang Ky">
</form>

<?php
$p = new cUser();

if(isset($_REQUEST['btnDK']))
    {
        $kq = $p->cDangky($_REQUEST['txtTK'],$_REQUEST['txtMK']);
        if($kq == -1){
            echo"<script>alert('Tai khoan da ton tai'); window.location.href='index.php?dangky'</script>";
        }
        elseif($kq == 1){
            echo"<script>alert('Dang ky thanh cong'); window.location.href='index.php?dangnhap'</script>";
        }
        else{
            echo"<script>alert('Dang ky khong thanh cong'); window.location.href='index.php?dangky'</script>";
        }

    }
?>
