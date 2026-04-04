<?php
    session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .layout-table{width: 100%; margin: 0 auto; border-collapse: collapse;}
        #left{width: 20%; }
        #right{width: 80%;}
        td {border: 1px solid black; vertical-align: top;}
        img {max-width: 100%; height: auto; display: block;}
    </style>
</head>
<body>
     <table class="layout-table">
        <tr>
            <td id="left">
                <img src="image/banner.jpg" style="width:100%; height:500px; object-fit:fill;">
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
        </tr>
     </table>
     <table class="layout-table">
        <tr>
            <td id ="left">
                <?php
                echo"<h2>Danh mục sản phẩm</h2>";
                include("view/listType.php");
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
                else {

                     include("view/search.php");
                echo"<h2>Danh sách sản phẩm</h2>";
                include("view/listProduct.php");    
                }
               
                ?>
            </td>
            
        </tr>
     </table>
      <footer style="text-align:center;">
          <h2>Nguyễn Hoàng Khánh Duy - 22653721</h2>
      </footer>
</body>
</html>