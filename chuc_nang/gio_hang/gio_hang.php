<div class="header2" style="margin-top: -45px; ">
	<p>TDT FASHION / Giỏ hàng</p>
</div>
<?php
if (isset($_GET['id']) and $_SESSION['trang_chi_tiet_gio_hang'] == "co") {
	$_SESSION['trang_chi_tiet_gio_hang'] = "huy_bo";
	if (isset($_SESSION['id_them_vao_gio'])) {
		$so = count($_SESSION['id_them_vao_gio']);
		$trung_lap = "khong";
		for ($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++) {
			if ($_SESSION['id_them_vao_gio'][$i] == $_GET['id']) {
				$trung_lap = "co";
				$vi_tri_trung_lap = $i;
				break;
			}
		}
		if ($trung_lap == "khong") {
			$_SESSION['id_them_vao_gio'][$so] = $_GET['id'];
			$_SESSION['sl_them_vao_gio'][$so] = $_GET['so_luong'];
		}
		if ($trung_lap == "co") {
			$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap] = $_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap] + $_GET['so_luong'];
		}
	} else {
		$_SESSION['id_them_vao_gio'][0] = $_GET['id'];
		$_SESSION['sl_them_vao_gio'][0] = $_GET['so_luong'];
	}
}

$gio_hang = "khong";
if (isset($_SESSION['id_them_vao_gio'])) {
	$so_luong = 0;
	for ($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++) {
		$so_luong = $so_luong + $_SESSION['sl_them_vao_gio'][$i];
	}
	if ($so_luong != 0) {
		$gio_hang = "co";
	}
}
echo "<div style=' font-size: 20px; margin-top:-50px; margin-left:800px; border-bottom: 1px solid #ddd;'>";

echo " Giỏ hàng của bạn";


if ($gio_hang == "khong") {
	echo "Bạn chưa có sản phẩm nào trong giỏ hàng";
} else {
	echo "<form action='' method='post' style='float: right;' >";
	echo "<input type='hidden' name='cap_nhat_gio_hang' value='co' > ";
	echo "<table style='border-bottom: 1px solid #ddd;   '>";
	echo "<tr>";
	echo "<td style='width: 100px; font-size:13px'><b>Hình</b></td>";
	echo "<td style='width: 150px; font-size:13px'><b>Tên</b></td>";
	echo "<td style='width: 100px; font-size:13px'><b>Size</b></td>";
	echo "<td style='width: 100px; font-size:13px'><b>Số lượng</b></td>";
	echo "<td style='width: 100px; font-size:13px'><b>Đơn giá</b></td>";
	echo "<td style='width: 100px; font-size:13px'><b>Thành tiền</b></td>";
	echo "</tr >";

	$tong_cong = 0;
	for ($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++) {

		$tv = "select id,ten,hinh_anh,gia from san_pham where id='" . $_SESSION['id_them_vao_gio'][$i] . "'";
		$tv_1 = mysqli_query($conn, $tv);
		$tv_2 = mysqli_fetch_array($tv_1);
		$tien = $tv_2['gia'] * $_SESSION['sl_them_vao_gio'][$i];
		$tong_cong = $tong_cong + $tien;
		$name_id = "id_" . $i;
		$name_sl = "sl_" . $i;
		$link_anh = "hinh_anh/san_pham/" . $tv_2['hinh_anh'];
		if ($_SESSION['sl_them_vao_gio'][$i] != 0) {
			echo "<div style='border-top: 1px solid #ddd;'>";
			echo "<tr >";
			echo "<td> <img src='$link_anh' width='50px'; ></td>";
			echo "<td style='color:#b31f2a;  font-weight: bold; font-size:13px;'>" . $tv_2['ten'] . "</td>";
			echo "<td style='font-weight: bold; font-size:13px; padding-left:10px' >M</td>";
			echo "<td>";
			echo "<input type='hidden' name='" . $name_id . "' value='" . $_SESSION['id_them_vao_gio'][$i] . "' >";
			echo "<input type='number' style='width: 100px; height: 30px' name='" . $name_sl . "' value='" . $_SESSION['sl_them_vao_gio'][$i] . "' > ";
			echo "</td>";
			echo "<td>" . $tv_2['gia'] . "</td>";
			echo "<td>" . $tien . "</td>";
			echo "<td><input class='button-3' type='submit' value='Cập nhật' > </td>";
			echo "</tr>";
			echo "</div>";
		}
	}
	echo "</table>";
	echo "<div style=''>";
	echo "Tổng giá trị đơn hàng là : " . $tong_cong . " VNĐ";
	echo "</div>";
	echo "</form>";
	echo "</div>";
	echo "<br>";
	include("chuc_nang/gio_hang/bieu_mau_mua_hang.php");
}

?>
<style>
	/* CSS */
	.button-3 {
		appearance: none;
		background-color: #2ea44f;
		border: 1px solid rgba(27, 31, 35, .15);
		border-radius: 6px;
		box-shadow: rgba(27, 31, 35, .1) 0 1px 0;
		box-sizing: border-box;
		color: #fff;
		cursor: pointer;
		display: inline-block;
		font-family: -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
		font-size: 14px;
		font-weight: 600;
		line-height: 20px;
		padding: 6px 16px;
		position: relative;
		text-align: center;
		text-decoration: none;
		user-select: none;
		-webkit-user-select: none;
		touch-action: manipulation;
		vertical-align: middle;
		white-space: nowrap;
	}

	.button-3:focus:not(:focus-visible):not(.focus-visible) {
		box-shadow: none;
		outline: none;
	}

	.button-3:hover {
		background-color: #2c974b;
	}

	.button-3:focus {
		box-shadow: rgba(46, 164, 79, .4) 0 0 0 3px;
		outline: none;
	}

	.button-3:disabled {
		background-color: #94d3a2;
		border-color: rgba(27, 31, 35, .1);
		color: rgba(255, 255, 255, .8);
		cursor: default;
	}

	.button-3:active {
		background-color: #298e46;
		box-shadow: rgba(20, 70, 32, .2) 0 1px 0 inset;
	}
</style>