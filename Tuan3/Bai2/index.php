<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3.2 - Upload File</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">Upload file</button>
    </form>

    <?php
        function checkSize($size) {
            return $size <= 2 * 1024 * 1024;
        }

        function checkType($type) {
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            return in_array($type, $allowedTypes);
        }

        function newName($oldname) {
            $name = pathinfo($oldname, PATHINFO_FILENAME);
            $ext  = pathinfo($oldname, PATHINFO_EXTENSION);
            return $name . "_" . rand(100, 999) . "." . $ext;
        }

        if (isset($_POST["submit"]) && isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
            $file = $_FILES["file"];

            if (!checkSize($file["size"])) {
                echo "<p>Lỗi: Kích thước file vượt quá 2MB!</p>";
            } else {
                $uploadDir = __DIR__ . "/hinhanh/";
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $newFilename = newName($file["name"]);
                $destination = $uploadDir . $newFilename;

                if (move_uploaded_file($file["tmp_name"], $destination)) {
                    echo "<h3>Kết quả sau khi Upload file</h3>";
                    echo "<p>Tên file ban đầu: "  . htmlspecialchars($file["name"])     . "</p>";
                    echo "<p>Tên file thay đổi: " . htmlspecialchars($newFilename)      . "</p>";
                    echo "<p>Kích thước: "         . round($file["size"] / 1024)        . " KB</p>";
                    echo "<p>Loại file: "          . htmlspecialchars($file["type"])    . "</p>";
                    echo "<p>Tên file tạm: "       . htmlspecialchars($file["tmp_name"]). "</p>";

                    if (checkType($file["type"])) {
                        echo "<img src='hinhanh/" . htmlspecialchars($newFilename) . "' style='max-width:300px;'>";
                    }
                } else {
                    echo "<p>Lỗi: Không thể upload file!</p>";
                }
            }
        }
    ?>
</body>
</html>