
<?php
	session_start();
if (!isset($_SESSION['login'])) {
	echo "<script>alert('Bạn không có quyền truy cập'); window.location.href='index.php?login';</script>";
	exit;
}
?>

<style>
	.admin-wrap{width: 100%;}
	.admin-table{width: 100%; border-collapse: collapse;}
	.admin-table th, .admin-table td{border: 1px solid #000; padding: 6px; text-align: left;}
	.admin-layout{width: 100%; border-collapse: collapse;}
	.admin-layout td{border: 1px solid #000; vertical-align: top;}
	.admin-left{width: 20%; padding: 10px;}
	.admin-right{width: 80%; padding: 10px;}
	.admin-menu a{display: block; margin: 6px 0;}

</style>

<div class="admin-wrap">
	<img src="image/admin.jpg" style="width:100%; height:500px; object-fit:fill;"><br>   
	<a href="index.php">Trang chủ</a> |
	<a href="index.php?logout" onclick="return confirm('Bạn muốn đăng xuất?')">Đăng xuất</a>

	<?php
		 include("view/search.php");
	?>
	<table class="admin-layout">
		<tr>
			<td class="admin-left">
				<div class="admin-menu">
					<h2><a href="admin.php?sanpham">Quản lý sản phẩm</a></h2>
					<h2><a href="admin.php?thuonghieu">Quản lý thương hiệu</a></h2>
				
					
				</div>
			</td>
			<td class="admin-right">
				<?php
				if (isset($_REQUEST['thuonghieu'])) {
					echo "<h3>Danh sách thương hiệu</h3>";
					include("view/adminTypes.php");
				}
				elseif (isset($_REQUEST['sanpham'])) {
					echo "<h3>Danh sách sản phẩm</h3>";
					include("view/adminProducts.php");
				}
				else {
					echo "<h1>Chào mừng đến với trang admin</h1>";
				}
				?>
			</td>
		</tr>
	</table>
	<footer style="text-align:center;">
        <H2>Nguyễn Hoàng Khánh Duy - 22653721</H2>
     </footer>
	
</div>

