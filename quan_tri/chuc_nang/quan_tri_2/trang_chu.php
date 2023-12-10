
<?php
if (!isset($bien_bao_mat)) {
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<style>
	header {
	background-color: #006699;
	color: #fff; 	
	}
	body {
	width: 100%;
	margin: 0 auto;
	padding: 0;
	font-family: 'Roboto Condensed', sans-serif, Arial, sans-serif;
}
	nav ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
	}

	nav ul li {
		display: inline-block;
		margin-right: 10px;
	}

	nav ul li a {
		color: #fff;
		text-decoration: none;
		font-size: 20px;
	}

	aside {
		background-color: #f2f2f2;
	}

	main {
		padding: 20px;
	}

	footer {
		background-color: #006699;
		color: white;
		padding: 10px;
		position: fixed;
		bottom: 0;
		width: 100%;
		
	}

	.button {
		color: #000;
	}

	.thoat {
		position: absolute;
		right: 50;
		top: 60;
	}

	.thoat li a {
		color: black;
		font-family: 'Times New Roman', Times, serif;
		font-weight: normal;
	}

	a.lk_1:hover {
		text-decoration: underline;
		
	}
	a.lk_1_1:hover {
		color: red;
		
	}

	a.lk_2 {
		text-decoration: none;
		line-height: 30px;
	}

	a.lk_2:hover {
		color: blue;
	}

	table {
		border-collapse: collapse;
		float: right;

	}

	ul {
		margin-right: 1300px;
		padding-top: 0px;
	}
	.dh{
		margin-left: -50px;
		margin-top: -16px;
		text-align: left;
	}

	.dh li {
		width: 200px;
		list-style: none;
		border: 1px solid #696969;
		padding: 10px;

	}
	.dh li a{
		color:#f2f2f2;
		font-size: 17px;
		text-align: left;
	}
	.dh ul{
		background-color: #011e24;
	}
	.tong {
		display: flex;
	}
	.chucnang{
		margin-left: -1200px;
		margin-top: 20px;
	}
	
</style>

<head>
	<meta charset="UTF-8">
	<title>Trang chủ quản trị</title>
</head>

<body>
	<header>
		<h1>Trang chủ quản trị</h1>
		<nav class="tc">
			<ul>
				<li><a href="index.php" class="lk_1">Trang chủ</a></li>
				<li><a href="?thamso=menu_doc" class="lk_1">Danh mục sản phẩm</a></li>
				<li><a href="?thamso=san_pham" class="lk_1">Sản phẩm</a></li>
				<li><a href="?thamso=hoa_don" class="lk_1">Hóa đơn</a></li>
				<li class="thoat"><a href="../index.php" class="lk_1_1">Thoát</a></li>
			</ul>

		</nav>
	</header>
	<div class="tong">
		<div class="dh">
			<table>
				<ul>
					<li><a href="?thamso=them_menu_doc" class="lk_2">Thêm menu dọc</a></li>
					<li><a href="?thamso=them_san_pham" class="lk_2">Thêm sản phẩm</a></li>
					<li><a href="?thamso=quan_ly_menu_doc" class="lk_2">Quản lý menu dọc</a></li>
					<li><a href="?thamso=quan_ly_san_pham" class="lk_2">Quản lý sản phẩm</a></li>
					<li><a href="?thamso=hoa_don" class="lk_2">Quản lý hóa đơn</a></li>
					<li><a href="?thamso=san_pham_trang_chu" class="lk_2">Sản phẩm trang chủ</a></li>
					<li><a href="?thamso=san_pham_noi_bat" class="lk_2">Sản phẩm nổi bật</a></li>
					<li><a href="?thamso=sua_thong_tin_quan_tri" class="lk_2">Thay đổi thông tin quản trị</a></li><br><br><br><br><br><br><br>
				</ul>
			</table>
		</div>
		<div class="chucnang">
			<?php
			include("chuc_nang/quan_tri_2/dieu_huong.php");
			?>
		</div>
	</div>

	<footer>
		<p>TDT FASHION </p>
	</footer>
</body>

</html>