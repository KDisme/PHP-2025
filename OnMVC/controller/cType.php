<?php
include_once("model/mType.php");
    class cType{
        public function cGetTH(){
            $p = new mType();
            if($p->mGetTH()-> num_rows>0){
                return $p->mGetTH();
            }
                return false;
        }
    }
?>