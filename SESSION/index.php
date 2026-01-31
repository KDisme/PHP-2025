<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["login"])){
        
        $ID = $_POST['txtID'];
        $passuser =md5($_POST['txtPass']);
        $host = "localhost";
        $user = "khanhduy"; 
        $pass = "123456"; 
        $db = "quanlytintuc"; 
        $con = mysqli_connect($host,$user,$pass,$db);
        if($con){
            $strLogin  = "Select * from nguoidung where username ='$ID' and password = '$passuser'" ;
            // echo $strLogin;
            $kq = $con->query($strLogin);
            if($kq->num_rows > 0){
                echo "Đăng nhập thành công ";
                $_SESSION["login"] = true;
                while($r = $kq->fetch_assoc()){
                    $_SESSION["loai"] = $r['idrole'];
                }
            }else{
                echo "Sai thong tin dang nhap";
            }
            $con->close();
            // // doc du lieu
            // $read = "Select * from LoaiTin";
            // $ketqua = $con->query($read);
            // if($ketqua->num_rows > 0){
            //     while($row = $ketqua->fetch_assoc()){
            //         echo $row["tenloaitin"]."<br>";
            //     }
            // }

            //Them du lieu
            // $insert = "Insert into LoaiTin(tenloaitin) values('Tin thế giới động vật')";
            // $ketqua = $con->query($insert);
            // if($ketqua){
            //     echo "Them thanh cong";
            // }else{
            //     echo"loi";
            // }

            // //update
            // $update = "UPDATE loaitin SET tenloaitin = N'Tin Thoi Trang' WHERE ID_loaitin = 1";
            // $ketqua = $con->query($update);
            // if($ketqua){
            //     echo "Sua thanh cong";
            // }else{
            //     echo"loi";
            // }

            // xoa
            // $delete = "DELETE FROM loaitin WHERE ID_loaitin = 4";
            // $ketqua = $con->query($delete);
            // if($ketqua){
            //     echo "Xoa thanh cong";
            // }else{
            //    echo"loi";
            // }

        }
        else{
            echo"lỗi";
        }
    }
    if(!isset($_SESSION["login"])){
        echo ' <form action="#" method="POST">
        User_name: <input type="text" name="txtID" id="">
        Password:  <input type="password" name="txtPass" id="">
        <input type="submit" value="Login" name="login">
    </form>';
    }else{
        
        echo '<a href="dangxuat.php">Dang xuat</a><br>';
        echo '<a href="loaitin.php">loai tin</a>';
    }
    ?>
    
</body>
</html>