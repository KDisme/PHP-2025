<?php
    include_once("mConnect.php");

    class mUser{
        public function mRegister($u,$pw){ 
            $p = new mConnect();
            $kq = mysqli_query($p->moKetNoi(),"insert into user(username, password,idRole) values ('$u','$pw','3')");
            return $kq;
            $p->dongKetNoi($p->moKetNoi());
        }

        public function mCheckID($u){
            $p = new mConnect();
            $kq = mysqli_query($p->moKetNoi(),"select * from user where username='$u'");
            return $kq;
            $p->dongKetNoi($p->moKetNoi());
        }

          public function mLogin($u,$pw){ 
            $p = new mConnect();
            $kq = mysqli_query($p->moKetNoi(),
            "select username, password from user");
            return $kq;
            $p->dongKetNoi($p->moKetNoi());
        }

        
        


    }
?>