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
		<title>Web bán hàng</title>
		<link rel="stylesheet" type="text/css" href="giao_dien/style.css">
        
	</head>
	<body>
    	
		<center>
        	<div class="header">
            	<div class="header_left">
                	<ul>
                    	<li><span  style="color:red;"class="glyphicon glyphicon-earphone"></span>0914139010</li>
                        
                    </ul>
                </div>
                <div class="header_center">
                	<div class="header_center_left"><?php include("chuc_nang/tim_kiem/vung_tim_kiem.php");?></div>
                    <div class="header_center_right"></div>
                </div>
         
				<div class="header_right">
                    
					<a href="login_SignUp.php"> <span class="glyphicon glyphicon-user"></span>Tài Khoản</a>
			   
		   </div>
        	</div>
            <div style=" text-align:center; margin-top:25px; margin-bottom:15px;">
            	<a href="index.php"><img style="height: 200px;" src="img/z4887413404811_1328bd9db9e2da99b79169c311b097ba.jpg"></a>
            </div>
			<div class="menu">
           				<?php
							include("chuc_nang/menu_ngang/menu_ngang.php");
						?> 
                        
			</div>
            <div class="conten">
            		<div class="conten_left">
                        <div class="nhungdanhmuc">
						<h3 style="color: #000;">Danh mục sản phẩm</h3>
                            <div class="noidung" style="text-align:left;">
                            	<?php include("chuc_nang/menu_doc/menu_doc.php"); ?>
                             </div>   
                        </div>   
                        <div class="nhungdanhmuc" style="padding-bottom:9px;">
						<h3 style="color: #000;">Sản phẩm nổi bật</h3>
                            
                        	<?php include("chuc_nang/san_pham/noi_bat.php");?>
                            </div>
						</div>		
                        
                    </div>
                    
                    <div class="conten_right">
                			
                            <div class="conten_right-bottom">
                            	
                                    <?php 
                                        include("chuc_nang/dieu_huong.php");
                                    ?>
                                   
  							</div>
                	</div>		
            </div>
            <!-- end conten--->
				<?php include('footer.php');?>	
					
                    
				
		</center>
	</body>
</html>