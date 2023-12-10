<?php 
echo "<div class='thongtinmuahang '>";
	echo "<br>";
	echo "<br>";
	echo "<form method='post' action='' >";
		echo "<input type='hidden' name='thong_tin_khach_hang' value='co' > ";
		echo "<table>";
			echo "<tr>";
				echo "<td colspan='2' style='font-size: 20px;border-bottom: 1px solid #ddd; '>";
					echo "Thông tin liên hệ giao hàng";
				echo "</td>";
			echo "</tr>";
			
			echo "<tr>";
				echo "<td style=' padding-top:20px'>Họ và tên*</td>";
				echo "<td>";
					
				echo '<div class="input-container">';
				echo "<br>";	
					echo "<input class='input1' type='text' name='ten_nguoi_mua' required>";
				
					echo '</div>';
					echo "</td>";
					
			echo "</tr>";

			echo "<tr>";
				echo "<td style=' padding-top:20px'>Email*</td>";
				echo "<td>";
				echo	'<div class="input-container">';
				echo "<br>";	
					echo "<input class='input1' type='text'  name='email' required  >";
					
					echo '</div>';
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td style=' padding-top:20px'>Số điện thoại*</td>";
				echo "<td>";
				echo "<br>";	
					echo "<input class='input1' type='text' style='width:400px' name='dien_thoai' required>";
			
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<br>";	
				echo "<td colspan='2' style='font-size: 20px; border-bottom: 1px solid #ddd;'required>";
					echo "Địa chỉ giao hàng";
				echo "</td>";
			echo "</tr>";
			
			echo "<tr>";
				echo "<td  style='padding-top:20px'>Chọn tỉnh thành*</td>";					
				echo "<td>";
				echo "<br>";	
				echo '<select class="input2" name="dia_chi" value="" id="" required>
					<option value="-- Chọn tỉnh thành --">-- Chọn tỉnh thành --</option>
					<option style="height: 50px" value="Bắc Giang">An Giang</option>
					<option value="Bắc Giang">Bà Rịa - Vũng Tàu</option>
					<option value="Bắc Giang">Bắc Giang</option>
					<option value="Bắc Giang">Bắc Cạn</option>
					<option value="Bắc Giang">Bắc Ninh</option>
					<option value="Bắc Giang">Bạc Liêu</option>
					<option value="Bắc Giang">Bình Dương</option>
					<option value="Bắc Giang">Bình Phước</option>
					<option value="Bắc Giang">Bình Thuận</option>
					<option value="Bắc Giang">Bình Định</option>
					<option value="Bắc Giang">Cà Mau </option>
					<option value="Bắc Giang">Cần Thơ</option>
					<option value="Bắc Giang">Gia Lai</option>
					<option value="Bắc Giang">Bạc Liêu</option>
					<option value="Bắc Giang">Bạc Liêu</option>
					<option value="Bắc Giang">Bạc Liêu</option>
					<option value="Bắc Giang">Bạc Liêu</option>
					<option value="Bắc Giang">Bạc Liêu</option>
					<option value="Bắc Giang">Bạc Liêu</option>
					<option value="Bắc Giang">Bạc Liêu</option>
				
				
				</select>';
					// echo "<textarea  name='dia_chi' ></textarea>";
					
				echo "</td>";
			echo "</tr>";
			
			echo "<tr>";
				echo "<td style='padding-top:20px'>Tên quận huyện*</td>";
				echo "<td>";
				echo "<br>";	
					echo "<input class='input1' type='text' style='width:400px ' name='ten_quan_huyen'required >";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td  style='padding-top:20px'>Tên phường/Xã*</td>";
			echo "<td>";
			echo "<br>";	
				echo "<input class='input1' type='text' style='width:400px' name='ten_phuong_xa' required>";
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td  style='padding-top:20px'>Số nhà, tên đường*</td>";
		echo "<td>";
		echo "<br>";	
			echo "<input class='input1' type='text' style='width:400px' name='so_nha' required >";
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td  style='padding-top:20px'>Ghi chú</td>";
	echo "<td>";
	echo "<br>";	
		echo "<textarea class='input1' style='width:400px; height:60px' name='ghi_chu'> </textarea>";
	echo "</td>";
echo "</tr>";
			echo "<tr>";
				echo "<td>&nbsp;</td>";
				echo "<td>";
				echo "<input style='width: 400px ' type='submit' class='dathang' value='Mua hàng'>";
				echo "</td>";
			echo "</tr>";
		echo "</table>";
	echo "</form>";
	echo "<div>";

?>
<style>
	.thongtinmuahang{
		margin-top: -300px;
		
	}
	
    .input1 {
      width: 400px;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      outline: none;
     
    }

    .input1:focus {
      border-color: #3498db;
    }

	.input2 {
      width: 400px;
      padding: 10px;
      border: 1px solid #ddd;
      
      outline: none;
      transition: border-color 0.3s ease;
	  background-color:	#e6e6e6;
    }

    

  
</style>