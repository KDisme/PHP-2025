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
}
?>