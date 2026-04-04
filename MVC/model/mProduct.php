<?php
include_once("mKetNoi.php");

class mProduct {
    public function mListProduct() {
        $p = new mKetNoi();
        $con = $p->moKetNoi();
        if($con){
	        $rs = $con->query("SELECT p.*, t.typeName FROM products p LEFT JOIN type t ON p.idType = t.idType");
            return $rs;
        }
            return false;
        $p->dongKetNoi($con);

    }

      public function mListProductByType($id) {
        $p = new mKetNoi();
        $con = $p->moKetNoi();
        if($con){
	        $rs = $con->query("SELECT p.*, t.typeName FROM products p LEFT JOIN type t ON p.idType = t.idType where t.idType='$id'");
            return $rs;
        }
            return false;
        $p->dongKetNoi($con);
    }

       public function mListProductByTen($ten) {
        $p = new mKetNoi();
        $con = $p->moKetNoi();
        if($con){
	        $rs = $con->query("SELECT p.*, t.typeName FROM products p LEFT JOIN type t ON p.idType = t.idType where productName like N'%$ten%'");
            return $rs;
        }
            return false;
        $p->dongKetNoi($con);
    }


    public function getID($id){
        $p = new mKetNoi();
        $con = $p->moKetNoi();
        if($con){
            $rs = $con->query("select * from products where idType = '$id'");
            return $rs;
        }
            return false;
        $p->dongKetNoi($con);

    }

    public function mInsertProduct($name,$price,$salePrice,$image,$idType){ 
            $p = new mKetNoi();
            $conn = $p->moKetNoi();
            $queryInsertProduct = "INSERT INTO products (productName, productPrice, salePrice, image, idType) VALUES (N'$name', '$price', '$salePrice', '$image', '$idType')";
            $result = $conn->query($queryInsertProduct);
            $p->dongKetNoi($conn);
            return $result;
        }
}