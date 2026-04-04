<?php
 include_once("mKetNoi.php");
    class mUser{
        public function mLogin($id,$pws){
           
            $p = new mKetnoi();
            $con = $p-> moKetNoi();
            if($con) 
            {
                $query = "select * from user where username = '$id' and password ='$pws'";
                $ketqua = $con->query($query);
                return $ketqua;
            }
            $p->dongKetNoi($con);
        }

        public function mRegister($id,$pws){
            $p = new mKetnoi();
            $con = $p-> moKetNoi();
            if($con) 
            {
                $query = "insert into user(username,password) values ('$id','$pws')";
                $ketqua = $con->query($query);
                return $ketqua;
            }
            $p->dongKetNoi($con);
        }

        public function checkID($id){
            $p = new mKetnoi();
            $con = $p-> moKetNoi();
            if($con) 
            {
                $query = "select * from user where username = '$id'";
                $ketqua = $con->query($query);
                return $ketqua;
            }
            $p->dongKetNoi($con);
        }
    }
?>