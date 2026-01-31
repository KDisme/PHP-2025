<?php
    session_start();
    if(!isset($_SESSION['loai']) || $_SESSION['loai'] == "1")
    {
        echo "<script>alert('Ban khong co quyen truy cap')</script>";
        header("refresh:0;url=index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "khanhduy"; 
        $pass = "123456"; 
        $db = "quanlytintuc"; 
        $con = mysqli_connect($host,$user,$pass,$db);
        if($con){
            $strLogin  = "Select * from loaitin" ;
            $kq = $con->query($strLogin);
            if($kq->num_rows > 0){
                echo 'Co loai tin '.'<a href="dangxuat.php">Dang Xuat</a>';
                echo"<table>";
                echo"<tr>";
                echo"<th>STT</th><th>Loai Tin</th><th>Hanh Dong</th>";
                echo"</tr>";
                $i = 1;
                while($r = $kq->fetch_assoc()){
                    echo "<tr>";
                    echo"<td>$i</td>";
                    echo"<td>".$r['theloai']."</td>";
                    echo"<td>Sua | Xoa</td>";
                    echo "</tr>";
                    $i++;
                }
                echo "</table>";
            }else{
                echo "chua co du lieu";
            }
            $con->close();
        }
        else{
            echo"lỗi";
        }
?>

</body>
</html>