<?php
include_once("controller/cType.php");

$p = new cType();
$rs = $p -> cListType();
if (!$rs) {
	echo "Không có dữ liệu thương hiệu";
	return;
}

echo "<table class='admin-table'>";
echo "<tr><th>ID</th><th>Tên thương hiệu</th></tr>";
while ($r = $rs->fetch_assoc()) {
	$id = isset($r['idType']) ? $r['idType'] : (isset($r['id']) ? $r['id'] : '');
	$name = $r['typeName'] ?? '';
	echo "<tr><td>".htmlspecialchars($id)."</td><td>".htmlspecialchars($name)."</td></tr>";
}
echo "</table>";
