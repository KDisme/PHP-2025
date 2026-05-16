<?php
    include_once("controller/cSanpham.php");
    $p = new cSanpham();
    $kq = $p->cGetSPbyID($_REQUEST['id']);
    if($kq){
        while($r = $kq->fetch_assoc()){
            $ten = $r['TenSP'];
            $giagoc = $r['GiaGoc'];
            $giaban = $r['GiaBan'];
            $hinhanh = $r['HinhAnh'];
            $th = $r['MaTH'];
        }
    }else {
    echo "<script>alert('Mã sản phẩm không tồn tại')</script>";
    echo "<script>window.location.href='admin.php';</script>";
}
?>
<form action="" method="POST" enctype="multipart/form-data">
    <h2>Update san pham</h2>
    Ten sp: <input type="text" name="tensp" value="<?php echo $ten;?>"> <br>
    Gia goc sp: <input type="text" name="giagoc" value="<?php echo $giagoc?>"> <br>
    Gia ban sp: <input type="text" name="giaban" value="<?php echo $giaban?>"> <br>
    Hinh anh sp: <input type="file" name="fileImage"> <br>
    <input type="hidden" name="oldImage" value="<?php echo $hinhanh?>">
    Thuong hieu sp: <select name="th" value="<?php echo $th?>">
        <?php
            include_once("controller/cType.php");
            $p = new cType();
            $kq = $p->cGetTH();
            if($kq){
            while($row =  $kq->fetch_assoc()){
                if($row['MaTH'] == $th){
                    echo"<option value='
                ".$row["MaTH"]."
                'selected>"
                .$row["TenTH"].
                "</option>";
                }else{

                
                echo"<option value='
                ".$row['MaTH']."
                '>
                ".$row['TenTH']."
                </option>";
            }
            }
            }
        ?>
    </select> <br>
    
   <input type="submit" name="btnSua" value="Sua">
</form>

<?php
if(isset($_REQUEST['btnSua'])){
    $p = new cSanpham();
    $kq = $p->cUpdateSP(
        $_REQUEST['id'],
        $_REQUEST['tensp'],
        $_REQUEST['giagoc'],
        $_REQUEST['giaban'],
        $_FILES['fileImage'],
        $_REQUEST['oldImage'],
        $_REQUEST['th']
    );
    if($kq){
    echo "<script>alert('Cập nhật sản phẩm thành công!'); window.location.href='admin.php' </script>";
    }else
    echo "<script>alert('Cập nhật sản phẩm khong thành công!'); window.location.href='admin.php' </script>";
}

?>
