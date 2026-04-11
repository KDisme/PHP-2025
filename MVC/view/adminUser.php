<?php
include_once("controller/cUser.php");

// price styles

$p=new cUser();
$rs = $p -> cListUser();
if (!$rs) {
	echo "Không có dữ liệu người dùng";
	return;
}

echo "<table class='admin-table'>";
echo "<tr>
<th>Mã người dùng</th>
<th>Tên Người dùng</th>
<th>Vai trò</th>
</tr>";
while ($r = $rs->fetch_assoc()) {
	$id = $r['id'] ??'';
	$name = $r['username'] ?? '';
    $idRole = $r['nameRole'] ?? '';
	echo "<tr><td>".$id."</td><td>".$name."</td><td>".$idRole."</td></tr>";
}
echo "</table>";



