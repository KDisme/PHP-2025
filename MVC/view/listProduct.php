<?php
include_once("controller/cProduct.php");

// price styles
echo "<style>.price-old{color:#c00;text-decoration:line-through;margin-right:6px}.price-sale{color:#000;font-weight:700}</style>";

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
		$price = (float)($r['productPrice'] ?? 0);
		$sale = (float)($r['salePrice'] ?? 0);
		if ($sale > 0 && $sale < $price) {
			echo "<span class='price-old'>".number_format($price,0,".",".")."đ</span>";
			echo "<span class='price-sale'>".number_format($sale,0,".",".")."đ</span>";
		} else {
			echo "<span class='price-sale'>".number_format($price,0,".",".")."đ</span>";
		}
        echo"</td>";
        $dem++;
        if($dem%4==0){
            echo"</tr><tr>";
        }
    }
    echo"</tr>";
    echo"</table>";
}


