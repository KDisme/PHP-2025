<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Bài 3.3: Upload nhiều file</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="files[]" multiple>
		<button type="submit" name="upload">Upload file</button>
	</form>

	<h3>Kết quả sau khi Upload file</h3>
	<div class="result-box">
	<?php
	if (isset($_POST['upload']) && isset($_FILES['files'])) {
		$uploadDir = __DIR__ . "/img/";
		if (!is_dir($uploadDir)) {
			mkdir($uploadDir, 0777, true);
		}

		$files = $_FILES['files'];
		for ($i = 0; $i < count($files['name']); $i++) {
			if ($files['error'][$i] === UPLOAD_ERR_OK) {
				$name     = $files['name'][$i];
				$tmp_name = $files['tmp_name'][$i];
				$size     = $files['size'][$i];
				$type     = $files['type'][$i];

				$ext      = pathinfo($name, PATHINFO_EXTENSION);
				$basename = pathinfo($name, PATHINFO_FILENAME);
				$newName  = $basename . "_" . rand(100, 999) . "." . $ext;
				$dest     = $uploadDir . $newName;

				echo '<div class="file-info">';
				echo "<b>Tên file ban đầu:</b> " . htmlspecialchars($name) . "<br>";

				if (move_uploaded_file($tmp_name, $dest)) {
					echo "<b>Tên file thay đổi:</b> " . htmlspecialchars($newName) . "<br>";
					echo "<b>Kích thước:</b> " . round($size / 1024) . " KB<br>";
					echo "<b>Loại file:</b> " . htmlspecialchars($type) . "<br>";
					echo "<b>Tên file tạm:</b> " . htmlspecialchars($tmp_name) . "<br>";

					if (strpos($type, 'image') === 0) {
						echo '<img src="img/' . htmlspecialchars($newName) . '" alt="Ảnh upload" style="max-width:300px;">';
					} else {
						echo "<i>Không phải file ảnh</i><br>";
					}
				} else {
					echo "<i>Lỗi: Không thể lưu file!</i><br>";
				}
				echo '</div>';
			}
		}
	}
	?>
	</div>
</body>
</html>
