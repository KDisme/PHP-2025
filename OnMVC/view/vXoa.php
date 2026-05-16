<?php
    include_once("controller/cSanpham.php");
    $p = new cSanpham();
    if($p->cXoaSP($_REQUEST['id'])){
         echo"<script>alert('Xóa sản phẩm thành công!'); window.location.href='admin.php'</script>";
    }else{
        echo"<script>alert('Xóa sản phẩm khong thành công!')</script>";
    }
?>