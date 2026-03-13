<?php
    class mUser{
        public function mLogin($id,$pws){
            include_once("mKetnoi.php");
            $p = new mKetnoi();
            $con = $p-> moKetnoi();
            if($con) 
            {
                $query = "select * from user where username = '$id' and password ='$pws'";
                $ketqua = $con->query($query);
                return $ketqua;
            }
            $p->dongKetnoi($con);
        }

        public function mRegister($id,$pws){
            include_once("mKetnoi.php");
            $p = new mKetnoi();
            $con = $p-> moKetnoi();
            if($con) 
            {
                $query = "insert into user(username,password) values ('$id','$pws')";
                $ketqua = $con->query($query);
                return $ketqua;
            }
            $p->dongKetnoi($con);
        }
    }
?>