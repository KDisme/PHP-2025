<?php
    class mKetnoi{
        public function moKetnoi(){
            return mysqli_connect("localhost", "root","","qlbh");
        }
        public function dongKetnoi($con){
            $con -> close();
        }
        
    }
?>