<form action="" method="post">
    Tai khoan: <input type="text" name="txtTK"> <br>
    Mat Khau: <input type="password" name="txtMK"> <br>
    <input type="submit" name="btnDK" value = "Dang Ky">
</form>

<?php
include_once("controller/cUser.php");

    if(isset($_REQUEST['btnDK'])){
        $p = new cUser();
        $kq = $p->cDangky($_REQUEST['txtTK'],$_REQUEST['txtMK']);
        if($kq == 1){
            echo"<script>alert('Dang ky thanh cong!'); window.location.href='index.php?dangnhap'</script>";
        }
        elseif($kq == -1){
            echo"<script>alert('Tai khoan da ton tai'); window.location.href='index.php?dangky'</script>";
        }else{
            echo"<script>alert('Dang ky khong thanh cong!'); window.location.href='index.php?dangky'</script>";
        }
        

    }
    
?>
