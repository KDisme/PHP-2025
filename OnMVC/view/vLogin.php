<form action="" method="POST">
    Tai Khoan <input type="" name="txtTK"> <br>
    Mat Khau <input type="password" name="txtMK"> <br>
    <input type="submit" name="btnDN" value="Dang Nhap">
</form>

<?php
    include_once("controller/cNguoidung.php");
    $p = new cNguoidung();
    if(isset($_REQUEST['btnDN'])){
        if($p->cDangnhap($_REQUEST['txtTK'],$_REQUEST['txtMK'])){
            echo"<script>alert('Dang nhap thanh cong'); window.location.href='admin.php'</script>";
        }
            echo"<script>alert('Dang nhap khong thanh cong'); window.location.href='index.php'</script>";

    }
?>

