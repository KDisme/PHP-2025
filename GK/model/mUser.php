<?php
include_once("mConnect.php");
    class mUser{
        public function mDangky($tk,$mk){
            $p = new mConnect();
            $kq = mysqli_query($p->moKetnoi(),"insert into user(username, password,idRole) values ('$tk','$mk',3) ");
            return $kq;
            $p->dongKetNoi($p->moKetNoi);
        }

        public function mKTTK($tk){
            $p = new mConnect();
            $kq = mysqli_query($p->moKetnoi(),"select * from user where username ='$tk'");
            return $kq;
            $p->dongKetNoi($p->moKetNoi);
        }

            public function mDangnhap($tk,$mk){
            $p = new mConnect();
            $kq = mysqli_query($p->moKetnoi(),"select * from user where username='$tk' and password='$mk'");
            return $kq;
            $p->dongKetNoi($p->moKetNoi);
        }
    }
?>