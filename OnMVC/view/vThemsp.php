<?php
    include_once("controller/cType.php")
?>
<form action="" method="POST" enctype="multipart/form-data">
    <h2>Them san pham</h2>
    Ten sp: <input type="text" name="tensp"> <br>
    Gia goc sp: <input type="text" name="giagoc"> <br>
    Gia ban sp: <input type="text" name="giaban"> <br>
    Hinh anh sp: <input type="file" name="fileImage"> <br>
    Thuong hieu sp: <select name="th">
        <?php
            $p = new cType();
            $kq = $p->cGetTH();
            if($kq){
            while($row =  $kq->fetch_assoc()){
                echo"<option value='
                ".$row['MaTH']."
                '>
                ".$row['TenTH']."
                </option>";
            }
            }
        ?>
    </select>
    
   <input type="submit" name="btnThem" value="Them">
</form>
<?php
include_once("controller/cSanpham.php");
   if(isset($_REQUEST['btnThem'])){
    $p = new cSanpham();
    $kq = $p-> cThemSP($_REQUEST['tensp'],$_REQUEST['giagoc'],$_REQUEST['giaban'],$_FILES['fileImage'],$_REQUEST['th']);
    if($kq){
          echo"<script>alert('Them sp thanh cong'); window.location.href='admin.php'</script>";
   }else{
        echo"<script>alert('Them sp khong thanh cong');</script>";
   }

   }
?>