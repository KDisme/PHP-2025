<?php
session_start();
include_once("model/mUser.php");
class cUser {
    public function cLogin($user,$pass){
        
        $p = new mUser();
        $listUser = $p->mLogin($user,md5($pass));
        if($listUser->num_rows >0)
        {
            $_SESSION['login'] = true;
            return true;
        }
        else
        {
            return false;
        }

    }

    public function cRegister($user,$pass){
        $p = new mUser();
        $check = $p ->checkID($user);
        if($check->num_rows >0)
        {
            echo "<script>alert('Username đã tồn tại')</script>";
            return false;
        }
        else
        {
            $ketqua = $p->mRegister($user,md5($pass));
            return $ketqua;
        }
    }
}
?>