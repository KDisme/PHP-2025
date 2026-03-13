<?php
    class mKetnoi {
        public function moKetnoi(){
            $conn = mysqli_connect("localhost","khanhduy","123456","qlbh");
            return $conn;
        }
        public function dongKetnoi($con){
            $con -> close();
        }
    }

?>