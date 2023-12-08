<div class="header2">
<p>TDT FASHION / SẢN PHẨM</p>
</div>
<?php
$_SESSION['trang_chi_tiet_gio_hang'] = "co";
$id = $_GET['id'];
$tv = "select * from san_pham where id='$id'";
$tv_1 = mysqli_query($conn, $tv);
$tv_2 = mysqli_fetch_array($tv_1);
$link_anh = "hinh_anh/san_pham/" . $tv_2['hinh_anh'];

echo "<table style=' margin-left: -200px; '>";
echo "<tr>";
echo "<td >";
echo "<img src='$link_anh' width='600px'; >";
echo "</td>";
echo "<td valign='top' style='';>";
echo "<a href='#' style='font-weight: 700; text-transform: uppercase;'>";
echo  $tv_2['ten'];
echo "</a>";
echo "<br>";
echo "<br>";
$gia = $tv_2['gia'];
$gia = number_format($gia, 0, ",", ".");
   	echo "<div style='color: black';>Giá bán: <div style=' color: red; display:inline-block; font-size:18px'; >$gia đ</div> ";
	echo "</div>";

echo "<form>";
echo "<br>";


echo "<div style='display:flex; gap: 20px'; >";
echo "<div>";
echo "<label>Chọn size:</label>";
echo "<br>";
echo "<select name='size' style='width: 190px; height:50px; background: #ededed; font-size: 15px; border:0px;'>";
echo " <option value='S'>S</option>";
echo " <option value='M'>M</option>";
echo " <option value='L'>L</option>";
echo " <option value='XL'>XL</option>";
echo "</select>";
echo "</div>";
echo "<br>";
echo "<input type='hidden' name='thamso' value='gio_hang' > ";
echo "<input type='hidden' name='id' value='" . $_GET['id'] . "' > ";
echo "<div>";
echo "<label>Chọn số lượng:</label>";
echo "<br>";
echo "<select name='so_luong' style='width: 190px; height:50px;  background: #ededed; font-size: 15px; border:0px;'>";
echo " <option style=''; value='1'>1</option>";
echo " <option value='2'>2</option>";
echo " <option value='3'>3</option>";
echo " <option value='4'>4</option>";
echo " <option value='5'>5</option>";
echo "</select>";
echo "</div>";
// echo "<input type='number' name='so_luong' value='1' style='width: 100px; height:40px';> ";
echo "</div>";
echo "<input type='submit' class='dathang' value='Thêm vào giỏ'>";
echo "<b style='color:red;'>Giới Thiệu Sản Phẩm</b>";

echo "<div style='color: black; width: 450px; height:300px'>";
echo $tv_2['noi_dung'];
echo "</form>";
echo "</table>";
