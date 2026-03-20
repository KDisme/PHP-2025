<?php
include_once("controller/cProduct.php");

$p=new cProduct();
$rs = $p -> cListProduct();
if(!$rs){
    echo"khong co san pham";
}else

{
    echo"<table>";
    echo"<tr>";
    $dem=0;
    while($r = $rs -> fetch_assoc()){
        echo"<td>";
        echo"<img src='image/".$r['image']." 'width=150px'/> <br>";
        echo"<b><a href=''>".$r['productName']."</a></b><br>";
        echo number_format($r['productPrice'],0,".",".")."đ";
        echo"</td>";
        $dem++;
        if($dem%4==0){
            echo"</tr><tr>";
        }
    }
    echo"</tr>";
    echo"</table>";
}


