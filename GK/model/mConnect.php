<?php
    class mConnect{
        public function moKetnoi(){
            return mysqli_connect("localhost", "root","","qlbh");
        }

        public function dongKetNoi($con){
            $con->close();
        }
    }
?>