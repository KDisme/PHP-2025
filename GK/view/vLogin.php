<?php
    include_once("controller/cUser.php");
?>

<form action="" method="post">
    Username: <input type="text" name="txtusername"> <br>
    Password: <input type="password" name="txtpassword"> <br>
    <input type="submit" name="btnloginr" value="Dang nhap">
</form>

<?php
    $p = new cUser();
    if(isset($_REQUEST['txtusername']) && isset($_REQUEST['txtpassword'])){
        if($p->cLogin($_REQUEST['txtusername'],$_REQUEST['txtpassword'])){
            echo"<script>alert('Dang nhap thanh cong'); window.location.href='admin.php'</script>";
        }
            echo"<script>alert('Dang nhap khong thanh cong'); window.location.href='index.php?register'</script>";
    }
?>
