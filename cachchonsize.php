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
                    <div style="font-weight:bold; font-size:25px; color:#000;">Hướng dẫn chọn size</div><br>

                    <p>Nếu bạn băn khoăn không biết chọn size nào cho phù hợp với cân nặng và chiều cao của mình, đừng lo lắng! Hãy xem bảng hướng dẫn chọn size bên dưới mà TDT FASHION tư vấn riêng dành cho bạn</p>

					<div class="anh">
                        <img src="hinh_anh/chonsize/size1.png" alt="">
                        <img src="hinh_anh/chonsize/size2.png" alt="">
                    </div>

                    <p>Bảng hướng dẫn chọn size trên là bảng hướng dẫn dựa trên kinh nghiệm nhiều năm của TDT FASHION theo khảo sát nhu cầu sở thích của khách hàng, tất nhiên sẽ không tuyệt đối, sẽ có những trường hợp ngoại lệ phụ thuộc theo vóc dáng, sở thích của từng người. Ví dụ có người thích mặc ôm, có người thích mặc rộng...</p>

                    <p>Nếu bạn vẫn còn có những mắc thắc và băn khoăn cần được giải đáp? Hãy liên hệ ngay với Bộ phận Chăm sóc khách hàng của TDT FASHION qua Hotline 0914139010 để được hỗ trợ thêm.</p>
                	
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