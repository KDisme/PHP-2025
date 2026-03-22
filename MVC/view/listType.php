<?php
include_once("controller/cType.php");

$p = new cType();
$ketqua = $p -> cListType();
if(!$ketqua){
    echo "khong co dulieu";
}else {
while($r = $ketqua -> fetch_assoc()){
    echo"<li><a href='#'>".$r['typeName']."</a></li>";
}

}
?>