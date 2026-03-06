<?php
$uploadDir = __DIR__ . '/uploads/';
if (!is_dir($uploadDir)) {
	mkdir($uploadDir, 0777, true);
}

// Xử lý xóa file
if (isset($_GET['delete'])) {
	$fileToDelete = basename($_GET['delete']);
	$filePath = $uploadDir . $fileToDelete;
	if (is_file($filePath)) {
		unlink($filePath);
		echo "<p>Đã xóa file $fileToDelete</p>";
	}
}

// Xử lý upload file
if (isset($_POST['upload']) && isset($_FILES['file'])) {
	$file = $_FILES['file'];
	if ($file['error'] === UPLOAD_ERR_OK) {
		$target = $uploadDir . basename($file['name']);
		if (move_uploaded_file($file['tmp_name'], $target)) {
			echo "<p>Upload thành công: " . htmlspecialchars($file['name']) . "</p>";
		} else {
			echo "<p>Upload thất bại!</p>";
		}
	} else {
		echo "<p>Lỗi upload file!</p>";
	}
}
?>
<form method="POST" enctype="multipart/form-data">
	<input type="file" name="file">
	<button type="submit" name="upload">Upload file</button>
</form>

<h3>Danh sách file đã upload:</h3>

<?php
$files = array_diff(scandir($uploadDir), array('.', '..'));
if (!empty($files)) {
	
	foreach ($files as $f) {
		echo '<li>' . htmlspecialchars($f) .
			' <a href="?delete=' . urlencode($f) . '" onclick="return confirm(\'Xóa file này?\');">Xóa</a></li>';
	}
}
?>

