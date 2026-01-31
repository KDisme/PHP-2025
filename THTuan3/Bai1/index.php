<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
</head>
<body>
    <form action="#" method ="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type = "submit" name ="submit"> Uploadfile</button>
    </form>

    <?php
        if(isset($_POST["submit"]) && isset($_FILES["file"])){
            echo "<H2>KET QUA SAU KHI UPLOAD FILE</H2>";
            echo "<pre>";
            var_dump($_FILES["file"]);
            echo "</pre>";
        }
    ?>
</body>
</html>