<?php
include_once("model/mUser.php");
    class cUser{
        public function cDangky($tk,$mk){
            $p = new mUser();
            $check = $p->mKiemtrataikhoan($tk);
            if($check ->num_rows > 0){
                return -1;
            }else{
                $kq = $p->mDangky($tk,md5($mk));
                if($kq){
                    return 1;
                } else{
                    return 2;
                }
            }
        }

        public function cDangnhap($tk,$mk){
            $p = new mUser();
            $kq = $p->mDangnhap($tk,md5($mk));
                if($kq->num_rows > 0){
                    $_SESSION['login'] = true;
                    $_SESSION['role'] = $kq->fetch_assoc()["idRole"];
                    return 1;
                } else{
                    return 0;
                }
            }
    


        
    }
?>