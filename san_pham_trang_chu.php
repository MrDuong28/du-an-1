<div class="nhungdanhmuc" style="margin-top:55px">
	<h3 style="color: black; font-family: 'Roboto Condensed', sans-serif,Arial,sans-serif; font-size: 22px;">SẢN PHẨM MỚI NHẤT</h3>
	<br />
	<?php

	$tv = "select id,ten,gia,hinh_anh,thuoc_menu from san_pham where trang_chu='co' order by sap_xep_trang_chu desc limit 0,15";
	$tv_1 = mysqli_query($conn, $tv);
	echo "<table>";
	while ($tv_2 = mysqli_fetch_array($tv_1)) {
		echo "<tr>";
		for ($i = 1; $i <= 4; $i++) {
			echo "<td align='center' width='215px' valign='top' >";
			if ($tv_2 != false) {
				$link_anh = "hinh_anh/san_pham/" . $tv_2['hinh_anh'];
				$link_chi_tiet = "?thamso=chi_tiet_san_pham&id=" . $tv_2['id'];
				$gia = $tv_2['gia'];
				$gia = number_format($gia, 0, ",", ".");
				echo "<a href='$link_chi_tiet' >";
				echo "<img src='$link_anh' style='border-radius: 5px; width: 300px; height: 400px'>";
				echo "</a>";
				echo "<br>";
				echo "<br>";
				echo "<a href='$link_chi_tiet' >";
				echo $tv_2['ten'];
				echo "</a>";
				echo "<div style='margin-top:5px; color:red' >";
				echo $gia;
				echo " đ";
				echo "</div>";
				echo "<br>";
			} else {
				echo "&nbsp;";
			}
			echo "</td>";
			if ($i != 4) {
				$tv_2 = mysqli_fetch_array($tv_1);
			}
		}
		echo "</tr>";
	}
	echo "</table>";
	?>

</div>
