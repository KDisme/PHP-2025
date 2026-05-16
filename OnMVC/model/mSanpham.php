<?php
include_once("mKetnoi.php");
    class mSanpham{
        public function mThemSP($tensp,$giagoc,$giaban,$hinhanh,$th){
            $p = new mKetnoi();
            return $p->moKetnoi()->query("INSERT INTO sanpham (TenSP, GiaGoc, GiaBan, HinhAnh, MaTH) VALUES ( '$tensp', '$giagoc', '$giaban', '$hinhanh', '$th')");
        }
        public function mGetSP(){
           $p = new mKetnoi();
            return $p->moKetnoi()->query("select sp.*, t.TenTH from sanpham sp, thuonghieu t where sp.MaTH = t.MaTH ");
    
        }
        public function mUpdateSP($idsp,$tensp,$giagoc,$giaban,$hinhanh,$th){
            $p = new mKetnoi();
            return $p->moKetnoi()->query("UPDATE sanpham SET TenSP = '$tensp', GiaGoc = '$giagoc', GiaBan = '$giaban', HinhAnh = '$hinhanh', MaTH = '$th' WHERE MaSP = $idsp");
        }

        public function mGetSPbyID($id){
           $p = new mKetnoi();
            return $p->moKetnoi()->query("select * from sanpham where MaSP = '$id' ");
    
        }

        public function mXoaSP($id){
           $p = new mKetnoi();
            return $p->moKetnoi()->query("delete from sanpham where MaSP='$id' ");
    
        }
    }
?>