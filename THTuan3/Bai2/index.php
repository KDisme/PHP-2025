<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
    <form action="#" method ="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type = "submit" name ="submit"> Uploadfile</button>
    </form>

    
</body>
    <?php
        if(isset($_POST["submit"]) && isset($_FILES["file"])){
            $file = $_FILES["file"];
            echo "Type = ".$file["type"]."<br>";
            echo "Size = ".$flie["size"]."<br>";
            echo "Full name = ".$file["name"]."<br>";
            echo "Temp = " .$file["tmp_name"]."<br>";
        }
        if(checksize($file["size"]))

        function checksize($size){
            if($size < 2*1024*1024){
                return true;
            }
                return false;
        }
        function newname($oldname){
            $name = pathinfo($oldname, PATHINFO_FILENAME)."-".rand(100,999);
            $ext = pathinfo($oldname,  PATHINFO_EXTENSION);
            $newname = "hinhanh\\".$name.".".$ext;
            return $newname;
        }
        function checktype($type){
        if($type=="image/jpeg"){
            return true;
        }
            return false;
        }
    ?>
</html>