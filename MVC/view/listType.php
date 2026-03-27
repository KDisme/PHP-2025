<?php
include_once("controller/cType.php");

$p = new cType();
$ketqua = $p -> cListType();
if(!$ketqua){
    echo "khong co dulieu";
}else {
while($r = $ketqua -> fetch_assoc()){
    echo"<a href='?idType=".$r['idType']."'>".$r['typeName']."</a> <br>";
}

}
?>