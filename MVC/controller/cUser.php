<?php
session_start();
class cUser {
    public function cLogin($user,$pass){
        include_once("model/mUser.php");
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
        include_once("model/mUser.php");
        $p = new mUser();
        $listUser = $p->mRegister($user,md5($pass));
        if($listUser==true)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>