<?php
include_once("mKetnoi.php");

class mProduct {
    public function mListProduct() {
        $p = new mKetnoi();
        $con = $p->moKetnoi();
        if($con){
            $rs = $con->query("select * from products");
            return $rs;
        }
            return false;
        $p->dongKetnoi($con);

    }
    public function getID($id){
        $p = new mKetnoi();
        $con = $p->moKetnoi();
        if($con){
            $rs = $con->query("select * from products where idType = '$id'");
            return $rs;
        }
            return false;
        $p->dongKetnoi($con);

    }
}