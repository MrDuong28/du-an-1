<!-- <?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<style type="text/css" >
	a.lk_1{font-size:22px;text-decoration:none;color:black;margin-right:30px; font-weight:bold;}
	a.lk_1:hover {color:red}
</style>
<br>
<center>
<table style="background-color: blue;width: 100%">
<a href="index.php" style="font-size:72px;color:black;text-decoration:none;" >Quản trị cửa hàng</a>
</table>
</center>
<br><br>
<table width="990px" >
	<tr>
		<td width="800px">
			<a href="index.php" class="lk_1" >Trang chủ</a>
			<a href="?thamso=menu_doc" class="lk_1" >Danh mục sản phẩm</a>
			<a href="?thamso=san_pham" class="lk_1" >Sản phẩm</a>
			<a href="?thamso=hoa_don" class="lk_1" >Hóa đơn</a>
		</td>
		<td align="right" >
			<a href="../index.php" class="lk_1">Thoát</a>
		</td>
	</tr>
</table>
<br><br>

<?php 
	include("chuc_nang/quan_tri_2/dieu_huong.php");
?>
 -->

 <?php 
	if(!isset($bien_bao_mat)){exit();}
?>
 <!DOCTYPE html>
<html lang="en">
	<style>
		header {
  	background-color: #000;
  	color: #fff;
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
  background-color: black;
  color: #fff;
  padding: 10px;
  position: fixed;
  bottom: 0;
  width: 100%;
}
.button{
    color: #000;
}
.thoat{
	position: absolute;
  	right:40;
	top: 67;
}
.thoat li a{
	color: #000;
	font-family:'Times New Roman', Times, serif;
	font-weight: normal;
}
a.lk_1:hover {color:red}

	</style>
<head>
  <meta charset="UTF-8">
  <title>Trang chủ quản trị</title>
</head>
<body>
  <header>
    <h1>Trang chủ quản trị</h1>
    <nav>
      <ul>
	  		<li><a href="index.php" class="lk_1" >Trang chủ</a></li>
			<li><a href="?thamso=menu_doc" class="lk_1" >Danh mục sản phẩm</a></li>
			<li><a href="?thamso=san_pham" class="lk_1">Sản phẩm</a></li>
			<li><a href="?thamso=hoa_don" class="lk_1" >Hóa đơn</a></li>
			<li class="thoat"><a href="../index.php" class="lk_1" >Thoát</a></li>
      </ul>

    </nav>
  </header>

  <footer>
    <p>TDT FASHION	</p>
  </footer>
</body>
</html>
<?php 
	include("chuc_nang/quan_tri_2/dieu_huong.php");
?>