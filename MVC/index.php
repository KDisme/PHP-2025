<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{width: 960px;}
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
                <a href="index.php?login">Đăng nhập</a><br>
                <a href="index.php?register">Đăng ký</a>
            </td> 
            <td id="right">
                <?php
                if(isset($_REQUEST['login'])){
                include ("view/login.php");
                }
                if(isset($_REQUEST['register'])){
                    include ("view/register.php");
                }

                ?>
            </td>
        </tr>
     </table>
</body>
</html>