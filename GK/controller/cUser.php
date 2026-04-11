<?php
    include_once("model/mUser.php");

    class cUser{
        public function cRegister($u,$pw){
            $p = new mUser();
            $kq = $p->mCheckID($u);
            if($kq -> num_rows>0){
                echo"<script>alert('Username da ton tai')</script>";
                return false;
            }   
            else 
                 return $p->mRegister($u,md5($pw));
        }

        public function cLogin($u,$pw){
            $p = new mUser();
            if($p->mLogin($u,md5($pw)) -> num_rows>0){
                 $_SESSION['login'] = true;
                return true;
            }   
            else 
                 return false;
        }
    }
?>
