<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $host="localhost";
        $user="khanhduy";
        $pass="123456";
        $db="qlda";
        $con=mysqli_connect($host,$user,$pass,$db);
        if($con){
            // echo"ket noi thanh cong";
            $sql = "SELECT * FROM nhansu";
            $kq = $con->query($sql);
            if($kq->num_rows> 0)
            {
                while($row = $kq->fetch_assoc()){
                    echo $row["id"]." ".$row["ten"]." ".$row["phongban"]."<br>";
                } 
            }
            else{
                echo"khong co bang nao";
            }
            // //them du lieu
            // $insert = "INSERT INTO nhansu(ten,phongban) values ('Nguyen Van A','Ke Toan')";
            // $kq =$con->query($insert);
            // if($kq){
            //     echo "Them thanh cong";
            // }
            //     else{
            //         echo "loi";
            //     }

            //sua du lieu
            // $sua = "UPDATE nhansu SET ten = 'Tran thi B' where id = 1";
            // $kq = $con->query($sua);
            // if($kq){
            //     echo " sua thanh cong";
            // }
            // else{
            //     echo"sua that bai";
            // }
            // //xoa du lieu
            // $xoa = "DELETE from nhansu where id = 3";
            // $kq = $con->query($xoa);
            // if($kq){
            //     echo "Xoa thanh cong";
            // }
            // else{
            //     echo "loi";
            // }
        }

            else{
            echo"khong the ket noi ";
        }
        $con->close();
    ?>
    
</body>
</html>