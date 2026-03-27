<?php
include_once("model/mProduct.php");

class cProduct{
    public function cListProduct(){
        $p = new mProduct();
        $rs = $p -> mListProduct();
        if($rs -> num_rows>0){
            return $rs;
        }
            return false;
    }

    public function cListProductByType($id){
        $p = new mProduct();
        $rs = $p -> mListProductByType($id);
        if($rs -> num_rows>0){
            return $rs;
        }
            return false;
    }

        public function cListProductByTen($ten){
        $p = new mProduct();
        $rs = $p -> mListProductByTen($ten);
        if($rs -> num_rows>0){
            return $rs;
        }
            return false;
    }
}
?>