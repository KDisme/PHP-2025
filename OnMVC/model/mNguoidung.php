<?php
include_once("mKetnoi.php");
    class mNguoidung{
        public function mDangnhap($tk,$mk){
            $p = new mKetnoi();
            return $p->moKetnoi()->query("select * from nguoidung where TenNguoiDung ='$tk' and MatKhau='$mk'");
        }
    }
?>