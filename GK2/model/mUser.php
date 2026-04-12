<?php
include_once("mKetnoi.php");
    Class mUser{
        public function mDangky($tk,$mk){
            $p = new mKetnoi();
            $kq = mysqli_query($p->moKetnoi(),"INSERT INTO user (username, password,idRole) VALUES ( '$tk', '$mk', '3')");
            return $kq;
            $p->dongKetnoi($p->moKetnoi());
        }
        
        public function mKiemtrataikhoan($tk){
            $p = new mKetnoi();
            $kq = mysqli_query($p->moKetnoi(),"SELECT * FROM user where username ='$tk' ");
            return $kq;
            $p->dongKetnoi($p->moKetnoi());
        }

        public function mDangnhap($tk,$mk){
            $p = new mKetnoi();
            $kq = mysqli_query($p->moKetnoi(),"select * from user where username='$tk' and password ='$mk'");
            return $kq;
            $p->dongKetnoi($p->moKetnoi());
        }
        
    }
?>