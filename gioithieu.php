<?php
	session_start();
    include("ket_noi.php");	
    include("chuc_nang/ham/ham.php");	
	if(isset($_POST['thong_tin_khach_hang']))
	{
		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	}
	if(isset($_POST['cap_nhat_gio_hang']))
	{
		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
		trang_truoc();
	}	
?> 
<html>
	<head>
		<meta charset="UTF-8">
		<title>TDT FASHION</title>
		<link rel="stylesheet" href="giao_dien/style.css">

	</head>
	<body>
    	
		<center>
			<div class="header">
            	<div class="header_left">
                	<ul>
                    	<li><span  style="color:red;"class="glyphicon glyphicon-earphone"></span>Hotline: 0914139010</li>
                        
                    </ul>
                </div>
            	<div class="header_center">
                	<div class="header_center_left">
						<?php include("chuc_nang/tim_kiem/vung_tim_kiem.php");?>
					</div>
            	</div>
         
				<div class="header_right">
                    
					<a href="login_SignUp.php"> <span class="glyphicon glyphicon-user"></span>Tài Khoản</a>
			   
		   		</div>
        	</div>
			<div class="menu">
           		<?php include("chuc_nang/menu_ngang/menu_ngang.php");?>            
			</div>

            <div class="conten">
            	<div class="conten_left">
                    <div class="nhungdanhmuc">
                        <h3 style="color: #000;">Danh mục sản phẩm</h3>
                        <div class="noidung" style="text-align:left;">
                            <?php include("chuc_nang/menu_doc/menu_doc.php"); ?>
                    	</div>   
                    </div>   
                        <hr>
                    <div class="nhungdanhmuc">
						<h3 style="color: black;">Sản phẩm mới nhất</h3>
                        <?php include("chuc_nang/san_pham/noi_bat.php");?>
                    </div>
					
				</div>		         
            </div> 
					
            <div class="conten_right" style="text-align:justify; color:#000;">
                <div class=gioithieu style="padding:10px; color:#6A6A6A;">
                    <div style="font-weight:bold; font-size:25px; color:#000;">GIỚI THIỆU TDT FASHION</div><br>

                    <p>Thương hiệu thời trang nam TDT FASHION được thành lập từ tháng 3 năm 2010, là thương hiệu thời trang uy tín hàng đầu tại Việt Nam dành riêng cho phái mạnh.</p>

					<p><b>Sứ mệnh</b></p>
					<p>Không ngừng sáng tạo và tỉ mỉ từ công đoạn sản xuất đến các khâu dịch vụ, nhằm mang đến cho Quý Khách Hàng những trải nghiệm mua sắm đặc biệt nhất: sản phẩm chất lượng - dịch vụ hoàn hảo - xu hướng thời trang mới mẻ và tinh tế. Thông qua các sản phẩm thời trang, TDT FASHION luôn mong muốn truyền tải đến bạn những thông điệp tốt đẹp cùng với nguồn cảm hứng trẻ trung và tích cực.</p>

					<p><b>Tầm nhìn</b></p>
					<p>Với mục tiêu xây dựng và phát triển những giá trị bền vững, trong 10 năm tới, TDT FASHION sẽ trở thành thương hiệu dẫn đầu về thời trang phái mạnh trên thị trường Việt Nam.</p>

					<p><b>Thông điệp TDT FASHION gửi đến bạn</b></p>
					<p>TDT FASHION muốn truyền cảm hứng tích cực đến các chàng trai: Việc mặc đẹp rất quan trọng, nó thể hiện được cá tính, sự tự tin và cả một phần lối sống, cách suy nghĩ của bản thân. Mặc thanh lịch, sống thanh lịch. muốn truyền cảm hứng tích cực đến các chàng trai: Việc mặc đẹp rất quan trọng, nó thể hiện được cá tính, sự tự tin và cả một phần lối sống, cách suy nghĩ của bản thân. Mặc thanh lịch, sống thanh lịch.</p>
					<p><b>Chọn TDT FASHION, bạn đang lựa chọn sự hoàn hảo cho điểm nhấn thời trang của chính mình!</b></p>
                           
                	<br>
                           <P> FPT Polytechnic, Tòa nhà, P. Trịnh Văn Bô, Nam Từ Liêm, Hà Nội<br>
                            ĐT: 0914.139.010 (Zalo)<br>
                       
                            Facebook: <a href="https://www.facebook.com/thoitrangnam461B/">https://www.facebook.com/thoitrangnam461B/</a> <br>
                            Website: <a href="https://www.menfashion.com/">menfashion.com</a>
						   </P>
							<br>
							<br>
							<hr>
                          </div>  
                	</div>		
            </div>
				<div class="footer">
					<?php include('footer.php');?>
				</div>
                    
				
		</center>
	</body>
</html>