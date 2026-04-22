
<?php
	session_start();
if (!isset($_SESSION['login']) || $_SESSION['role'] == 3) {
	echo "<script>alert('Bạn không có quyền truy cập'); window.location.href='index.php';</script>";
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
					<h2>Quản lý sản phẩm</h2>
					<ul><a href="admin.php?sanpham">Xem danh sách sản phẩm</a></ul>
					<ul><a href="admin.php?themsp">Thêm sản phẩm</a></ul>
					<h2>Quản lý thương hiệu</h2>
					<ul><a href="admin.php?thuonghieu">Xem danh sách thương hiệu</a></ul>
					<?php
						if($_SESSION['role'] == 1){
							echo"<h2>Quản lý người dùng</h2>";
							echo'<ul><a href="admin.php?nguoidung">Xem danh sách người dùng</a></ul>';
							echo'<ul><a href="admin.php?themnguoidung">Thêm người dùng</a></ul>';
						}
					?>
					
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
					elseif(isset($_REQUEST['themsp'])){
						include_once("view/adminAddSanPham.php");
				}
			
			
					elseif(isset($_REQUEST['nguoidung'])){
						echo "<h3>Danh sách người dùng</h3>";
						include_once("view/adminUser.php");
				}	elseif(isset($_REQUEST['themnguoidung'])){
						echo "<h3>Thêm người dùng</h3>";
						include_once("view/adminAddUser.php");
				}
				elseif(isset($_REQUEST['suasp'])){
						include_once("view/updateProduct.php");
				}elseif(isset($_REQUEST['xoasp'])){
						include_once("view/deleteProduct.php");
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

