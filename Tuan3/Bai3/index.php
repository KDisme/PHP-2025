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
		$files = $_FILES['files'];
		for ($i = 0; $i < count($files['name']); $i++) {
			if ($files['error'][$i] === UPLOAD_ERR_OK) {
				$name = $files['name'][$i];
				$tmp_name = $files['tmp_name'][$i];
				$size = $files['size'][$i];
				$type = $files['type'][$i];
				echo '<div class="file-info">';
				echo "<b>Tên file ban đầu:</b> $name<br>";
				echo "<b>Tên file thay đổi:</b> " . basename($tmp_name) . "<br>";
				echo "<b>Kích thước:</b> " . round($size/1024) . " KB<br>";
				echo "<b>Loại file:</b> $type<br>";
				echo "<b>Tên file tạm:</b> $tmp_name<br>";
				// Hiển thị hình ảnh nếu là file ảnh
				if (strpos($type, 'image') === 0) {
					echo '<img src="data:' . $type . ';base64,' . base64_encode(file_get_contents($tmp_name)) . '" alt="Ảnh upload">';
				} else {
					echo "<i>Không phải file ảnh</i><br>";
				}
				echo '</div>';
			}
		}
	}
	?>
	</div>
</body>
</html>
