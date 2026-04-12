<?php
    include_once("controller/cUpload.php");
    if(!isset($_SESSION['login']) || $_SESSION['role'] == 3){
         echo"<script>alert('M khong vao duoc');window.location.href='index.php'</script>";
         exit;
    }
?>
<form action="" method="POST" enctype="multipart/form-data">
    <h2>UpLoad File</h2>
    <input type="file" name="file" required>
    <input type="submit" name="btnUpload" value="Upload">
</form>

<?php
    if(isset($_REQUEST['btnUpload'])){
        $file = $_FILES['file'];
        $p = new cUpload();
        $kq = $p->cUploadanh($file);
        if(is_string($kq)){
            echo"<script>alert('Upload thanh cong')</script>";
            echo "<p>Anh vua tai len:</p>";
            echo "<img src='$kq' alt='Uploaded image' style='max-width:300px;'>";
        }
        elseif($kq == -1){
            echo"<script>alert('Upload khong thanh cong');window.location.href='index.php?upload'</script>";
        }
        elseif($kq == -2){
            echo"<script>alert('Loai tep khong dung')</script>";
        }else{
            echo"<script>alert('Kich thuoc tep qua lon');window.location.href='index.php?upload'</script>";
        }
        
    }
?>




