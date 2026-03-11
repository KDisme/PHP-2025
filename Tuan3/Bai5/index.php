<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 3.5 - Upload file (tối đa 100MB)</title>
</head>
<body>
    <h2>Cấu hình PHP hiện tại</h2>
    <ul>
        <li><b>upload_max_filesize:</b> <?= ini_get('upload_max_filesize') ?></li>
        <li><b>post_max_size:</b> <?= ini_get('post_max_size') ?></li>
        <li><b>max_file_uploads:</b> <?= ini_get('max_file_uploads') ?></li>
    </ul>

    <h2>Upload File</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="upload">Upload file</button>
    </form>

    <?php
    if (isset($_POST['upload'])) {
        if (!isset($_FILES['file']) || $_FILES['file']['error'] === UPLOAD_ERR_NO_FILE) {
            echo "<p>Vui lòng chọn file trước khi upload.</p>";
        } elseif ($_FILES['file']['error'] !== UPLOAD_ERR_OK) {
            $errors = [
                UPLOAD_ERR_INI_SIZE   => 'File vượt quá upload_max_filesize trong php.ini.',
                UPLOAD_ERR_FORM_SIZE  => 'File vượt quá MAX_FILE_SIZE trong form.',
                UPLOAD_ERR_PARTIAL    => 'File chỉ được upload một phần.',
                UPLOAD_ERR_NO_TMP_DIR => 'Không tìm thấy thư mục tạm.',
                UPLOAD_ERR_CANT_WRITE => 'Không thể ghi file lên đĩa.',
                UPLOAD_ERR_EXTENSION  => 'Upload bị chặn bởi extension PHP.',
            ];
            $code = $_FILES['file']['error'];
            echo "<p>Lỗi: " . htmlspecialchars($errors[$code] ?? "Lỗi không xác định (code $code)") . "</p>";
        } else {
            $file    = $_FILES['file'];
            $name    = $file['name'];
            $tmpName = $file['tmp_name'];
            $size    = $file['size'];
            $type    = $file['type'];

            $uploadDir = __DIR__ . "/uploads/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $ext      = pathinfo($name, PATHINFO_EXTENSION);
            $basename = pathinfo($name, PATHINFO_FILENAME);
            $newName  = $basename . "_" . rand(100, 999) . ($ext ? ".$ext" : "");
            $dest     = $uploadDir . $newName;

            echo "<h3>Kết quả sau khi Upload file</h3>";
            echo "<p><b>Tên file ban đầu:</b> "  . htmlspecialchars($name)    . "</p>";
            echo "<p><b>Tên file thay đổi:</b> " . htmlspecialchars($newName) . "</p>";
            echo "<p><b>Kích thước:</b> "         . round($size / 1024 / 1024, 2) . " MB</p>";
            echo "<p><b>Loại file:</b> "          . htmlspecialchars($type)    . "</p>";
            echo "<p><b>Tên file tạm:</b> "       . htmlspecialchars($tmpName) . "</p>";

            if (move_uploaded_file($tmpName, $dest)) {
                echo "<p><b>Lưu tại:</b> uploads/" . htmlspecialchars($newName) . "</p>";
                if (strpos($type, 'image') === 0) {
                    echo '<img src="uploads/' . htmlspecialchars($newName) . '" style="max-width:300px;">';
                }
            } else {
                echo "<p>Lỗi: Không thể lưu file!</p>";
            }
        }
    }
    ?>
</body>
</html>
