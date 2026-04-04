<?php
include_once("mKetNoi.php");

class mType {
    public function mListType(){
        $p = new mKetnoi();
        $con = $p->moKetNoi();
        if($con){
            $ketqua = $con->query("select * from type");
            return $ketqua;
        }
            return false;
        $p->dongKetNoi($con);
    }
}
?>