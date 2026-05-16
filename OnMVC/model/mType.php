<?php
include_once("mKetnoi.php");
    class mType{
        public function mGetTH(){
            $p = new mKetnoi();
            return $p->moKetnoi()->query("select * from thuonghieu");
        }
    }
?>