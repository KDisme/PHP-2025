<form action="" method="post">
    Tai khoan: <input type="text" name="txtTK"> <br>
    Mat Khau: <input type="password" name="txtMK"> <br>
    <input type="submit" name="btnDN" value = "Dang Ky">
</form>

<?php
include_once("controller/cUser.php");

    if(isset($_REQUEST['btnDN'])){
        $p = new cUser();
        $kq = $p->cDangnhap($_REQUEST['txtTK'],$_REQUEST['txtMK']);
        if($kq == 1){
            echo"<script>alert('Dang nhap thanh cong!'); window.location.href='index.php'</script>";
        }
        else{
            echo"<script>alert('Dang nhap khong thanh cong!'); window.location.href='index.php?dangnhap'</script>";
        }
        

    }
    
?>
