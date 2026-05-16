<?php
include_once("model/mNguoidung.php");
    class cNguoidung{
        public function cDangnhap($tk,$mk){
            $p = new mNguoidung();
            if($p->mDangnhap($tk,md5($mk))->num_rows >0){
                $_SESSION['login'] = true;
                return true;
            } 
                return false;
        }

    }
?>