<?php
    class mKetnoi {
        public function moKetnoi(){
            $conn = mysqli_connect("sql300.infinityfree.com","if0_41495697","SmtlAgkwGBVBfqC","if0_41495697_qlbh");
            /*$conn = mysqli_connect("localhost","khanhduy","123456","qlbh");*/
            mysqli_set_charset($conn, "utf8mb4");
            return $conn;
        }
        public function dongKetnoi($con){
            $con -> close();
        }
    }

?>

