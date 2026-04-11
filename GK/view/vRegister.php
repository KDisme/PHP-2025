<?php
    include_once("controller/cUser.php");
?>

<form action="" method="post">
    Username: <input type="text" name="txtusername"> <br>
    Password: <input type="password" name="txtpassword"> <br>
    <input type="submit" name="btnregister" value="Dang ky">
</form>

<?php
    $p = new cUser();
    if(isset($_REQUEST['txtusername']) && isset($_REQUEST['txtpassword'])){
        if($p->cRegister($_REQUEST['txtusername'],$_REQUEST['txtpassword'])){
            echo"<script>alert('Dang ky thanh cong'); window.location.href='index.php?login'</script>";
        }
            echo"<script>alert('Dang ky khong thanh cong'); window.location.href='index.php?register'</script>";
    }
?>
