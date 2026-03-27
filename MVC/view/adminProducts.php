<?php
include("controller/cProduct.php");
$p=new cProduct();
if(isset($_REQUEST['idType'])){
    $rs = $p -> cListProductByType($_REQUEST['idType']);
}
elseif(isset($_REQUEST['btnTimkiem'])){

$rs = $p -> cListProductByTen($_REQUEST['ten']);
}
else{
    $rs = $p -> cListProduct();
}

if(!$rs){
    echo"khong co san pham";
}

echo "<table class='admin-table'>";
echo "<tr><th>ID</th><th>Tên sản phẩm</th><th>Giá</th><th>Giá sale</th><th>Hình</th><th>Loại</th></tr>";
while ($r = $rs->fetch_assoc()) {
	$id = $r['idProduct'] ?? ($r['id'] ?? '');
	$name = $r['productName'] ?? '';
	$price = $r['productPrice'] ?? '';
	$salePrice = $r['salePrice'] ?? '';
	$img = $r['image'] ?? '';
	$type = $r['typeName'] ?? ($r['idType'] ?? '');

	$imgHtml = $img ? "<img src='image/".htmlspecialchars($img)."' width='60' />" : "";
	echo "<tr>";
	echo "<td>".htmlspecialchars($id)."</td>";
	echo "<td>".htmlspecialchars($name)."</td>";
	echo "<td>".htmlspecialchars($price)."</td>";
	echo "<td>".htmlspecialchars($salePrice)."</td>";
	echo "<td>".$imgHtml."</td>";
	echo "<td>".htmlspecialchars($type)."</td>";
	echo "</tr>";
}
echo "</table>";
