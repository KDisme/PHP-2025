<?php
    class mConnect{
        public function moKetNoi(){
            return mysqli_connect("localhost","root","","qlbh");
        }

        public function dongKetNoi($con){
           $con -> close();
        }
    }
?>
