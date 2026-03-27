<?php
include_once("mKetnoi.php");

class mProduct {
    public function mListProduct() {
        $p = new mKetnoi();
        $con = $p->moKetnoi();
        if($con){
	        $rs = $con->query("SELECT p.*, t.typeName FROM products p LEFT JOIN type t ON p.idType = t.idType");
            return $rs;
        }
            return false;
        $p->dongKetnoi($con);

    }

      public function mListProductByType($id) {
        $p = new mKetnoi();
        $con = $p->moKetnoi();
        if($con){
	        $rs = $con->query("SELECT p.*, t.typeName FROM products p LEFT JOIN type t ON p.idType = t.idType where t.idType='$id'");
            return $rs;
        }
            return false;
        $p->dongKetnoi($con);
    }

       public function mListProductByTen($ten) {
        $p = new mKetnoi();
        $con = $p->moKetnoi();
        if($con){
	        $rs = $con->query("SELECT p.*, t.typeName FROM products p LEFT JOIN type t ON p.idType = t.idType where productName like N'%$ten%'");
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