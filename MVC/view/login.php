<form action="#" method="post">
    Username: <input type="text" name ="txtusername"><br>
    Password: <input type="password" name ="txtpassword"> <br>
    <input type="submit" name="btnsubmit" value="Đăng nhập">
</form>

<?php
    if(isset($_REQUEST['btnsubmit'])){
        include_once("controller/cUser.php");
        $p = new cUser();
        $ketqua = $p->cLogin($_REQUEST["txtusername"], $_REQUEST["txtpassword"]);
        if($ketqua==true)
        {
            echo "<script>alert('Đăng nhập thành công')</script>";
        }else{
            echo "<script>alert('Đăng nhập không thành công')</script>";
        }
        
        
    }
?>