<?php
include_once("model/mType.php");

class cType{
    public function cListType(){
        $p = new mType();
        $listtype = $p -> mListType();
        if($listtype -> num_rows >0)
        {
            return $listtype;
        }
            return false;
    }
}
?>