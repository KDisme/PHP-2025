<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{width: 1000px;}
        #left{width: 30%;}
        #right{width: 70%;}
        td {border: 1px solid black;}
    </style>
</head>
<body>
     <table>
        <tr>
            <td id="left">
                <a href="index.php">Trang chủ</a> <br>
                <?php
                    if (!isset($_SESSION['login'])){
                        echo'<a href="index.php?login">Đăng nhập</a><br>';
                        echo'<a href="index.php?register">Đăng ký</a>';
                    }
                    else
                    {
                        echo '<a href="admin.php">Admin</a><br>';
                        echo '<a href="index.php?logout" onclick="return confirm(\'Bạn muốn đăng xuất?\')">Đăng xuất</a>';
                    }
                ?>
            </td> 
            <td id="right">
                <?php
                if(isset($_REQUEST['login'])){
                include ("view/login.php");
                }

                else if(isset($_REQUEST['register'])){
                include ("view/register.php");
                } 
                else if (isset($_REQUEST['logout'])) {
                include("view/logout.php");
                }
                ?>
            </td>
        </tr>
     </table>
     <table>
        <tr>
            <td id ="left">
                <?php
                echo"<h2>Danh mục sản phẩm</h2>";
                include("view/listType.php");
                ?>
            </td>
            <td id="right">
                <?php
                echo"<h2>Danh sách sản phẩm</h2>";
                include("view/listProduct.php");
                ?>
            </td>
            
        </tr>
     </table>
     <footer>
        <H2>Nguyễn Hoàng Khánh Duy - 22653721</H2>
     </footer>
</body>
</html>