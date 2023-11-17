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
                	<?php include("chuc_nang/tim_kiem/vung_tim_kiem.php");?>
                </div>
                <div class="header_right">
                	<ul>
                    	
                		<?php
							
							if(isset($_SESSION['username'])){
								echo"<li>";
								echo "Chào ".$_SESSION['username'];?><a href="index.php"><b><i> thoát</i></b></a></li>
							<?Php
								session_destroy();
								}else{
								echo "";?><li> <a href="login_SignUp.php"><span class="glyphicon glyphicon-user"></span></a></li>
							<?Php
							}	
						?>		
                    	
                    </ul>  
                    
                </div>
        	</div>
            <div style=" text-align:center; margin-top:25px; margin-bottom:15px;">
			<img style="height: 200px;" src="img/z4887413404811_1328bd9db9e2da99b79169c311b097ba.jpg"></a>
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
                        
                        <div class="nhungdanhmuc">
						<h3 style="color: #000;">Sản phẩm nổi bật</h3>
                            
                        	<?php include("chuc_nang/san_pham/noi_bat.php");?>
                            </div>
						</div>		
                        
                    </div>
                    
                    <div class="conten_right">
                    		<div style="border:1px solid #000; color:#000; text-align:justify; padding:5px;">
                            	<h4>Hướng dẫn mua hàng</h4>

                                       <b><i style="color:#090;">Các bạn có thể qua trực tiếp SHOP để mặc thử hàng và mua hàng</i></b><br>
                                 Shop mở cửa từ 7h - 22h hàng ngày<br>
								 FPT Polytechnic, Tòa nhà, P. Trịnh Văn Bô, Nam Từ Liêm, Hà Nội 100000, Việt Nam<Br>
                            </div>
                			<br>
                            <div style=" width:780">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d930.9664907608384!2d105.74696120499803!3d21.038048500736956!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455305afd834b%3A0x17268e09af37081e!2sT%C3%B2a%20nh%C3%A0%20FPT%20Polytechnic.!5e0!3m2!1svi!2s!4v1699847648561!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            
                	</div>		
            </div>
            <!-- end conten--->
				<?php include('footer.php');?>	
					
                    
				
		</center>
	</body>
</html>