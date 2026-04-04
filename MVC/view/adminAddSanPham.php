<?php
include_once("controller/cType.php");

?>
<form action="#" method="post" enctype="multipart/form-data">
<h2>Thêm Sản Phẩm</h2>
Tên Sản phẩm  <input type="text" name="txtName"> <br>
Giá Gốc <input type="text" name="txtPrice"> <br>
Giá Bán <input type="text" name ="txtSalePrice">  <br>
Ảnh sản phẩm <input type="file" name="fileImage" id ="fileImage" > <br>
Thương Hiệu  <select name="txtType" id="txtType">
    <option value="" selected></option>
<?php
    $p = new cType();
    $ketqua = $p->cListType();
    if($ketqua){
        while($row = $ketqua -> fetch_assoc()){
            echo "<option value='
            ".$row['idType']."
            '>
            ".$row['typeName']."
            </option>";
        }
                }
?>
</select> <br>
<input type="submit" name="Them">
<input type="reset" name="Nhap Lai">

</form>

 <?php
    if(isset($_REQUEST["Them"])){
        include_once("controller/cProduct.php");
        $p = new cProduct();
        $kq = $p->cInsertProduct(
            $_REQUEST["txtName"],
            $_REQUEST["txtPrice"],
            $_REQUEST["txtSalePrice"],
            $_FILES["fileImage"],
            $_REQUEST["txtType"]
        );
        if($kq){
            echo "<script>alert('Thêm sản phẩm thành công!')</script>";
            echo "<script>window.location.href='admin.php?sanpham';</script>";
        } else {
            echo "<script>alert('Thêm sản phẩm thất bại!')</script>";
        }
    }
    ?>