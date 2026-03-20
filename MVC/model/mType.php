<?php
include_once("mKetnoi.php");

class mType {
    public function mListType(){
        $p = new mKetnoi();
        $con = $p->moKetnoi();
        if($con){
            $ketqua = $con->query("select * from type");
            return $ketqua;
        }
            return false;
        $p->dongKetnoi($con);
    }
}
?>