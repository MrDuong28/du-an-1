<?php
session_start();
include("ket_noi.php");
include("chuc_nang/ham/ham.php");
if (isset($_POST['thong_tin_khach_hang'])) {
    include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
}
if (isset($_POST['cap_nhat_gio_hang'])) {
    include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
    trang_truoc();
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>TDT FASHION</title>
    <link rel="stylesheet" href="giao_dien/css.css">
    <link rel="icon" type="" href="img/icon.png">
</head>

<body>

    <center>
    <div class="header">
			<div class="header_left">
				<p>Hotline: 0914139010</p>
			</div>
			<div class="header_right">
				<a class="cc" href="cachchonsize.php">Cách chọn size</a>
				<a class="gt" href="gioithieu.php">Giới Thiệu</a>

			</div>

			<!-- <div class="header_center">
                	<div class="header_center_left"><?php include("chuc_nang/tim_kiem/vung_tim_kiem.php"); ?></div>
                    <div class="header_center_right"></div>
                </div>
         
				<div class="header_right">
                    
					<a href="login_SignUp.php"> <span class="glyphicon glyphicon-user"></span>Tài Khoản</a>
			   
		   		</div> -->
		</div>
        <div class="menu">
            <?php include("chuc_nang/menu_ngang/menu_ngang.php"); ?>
        </div>
   
        <div class=gioithieu style="padding:10px; color:#6A6A6A;">
            <div style="font-weight:bold; font-size:25px; color:#000; margin-left: -250px; margin-top: 13px;">GỬI LIÊN HỆ VỀ TDT FASHION</div><br>
            <div class="form">
            <form class="thongtin" action="mailto:your_email_address" method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Họ tên" required>
                    <i class="icon fas fa-user"></i>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class="icon fas fa-envelope"></i>
                </div>
                <div class="form-group">
                    <input type="text" name="subject" placeholder="Tiêu đề">
                    <i class="icon fas fa-tag"></i>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Nội dung"></textarea>
                    <i class="icon fas fa-file-alt"></i>
                </div>
                <input type="submit" value="Gửi">
            </form>
            </div>
            <br>
            <br>
        </div>
        <div class="map">
            <h2>VỊ TRÍ CỦA SHOP</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d930.9664907608384!2d105.74696120499803!3d21.038048500736956!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455305afd834b%3A0x17268e09af37081e!2sT%C3%B2a%20nh%C3%A0%20FPT%20Polytechnic.!5e0!3m2!1svi!2s!4v1699847648561!5m2!1svi!2s" width="700px" height="500px" style="border:0; padding-left: 45px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

        <div class="footer" style="padding-top: 160px;">
            <?php include('footer.php'); ?>
        </div>

        <style>
            .form{
                margin-left: -250px;
                margin-top: 20px;
            }
            .thongtin {
                width: 500px;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff;
                border: 1px solid #ccc;
              
            }

            h1 {
                text-align: center;
                font-size: 20px;
                font-weight: bold;
            }

            /* Các trường input */
            .thongtin input,
            textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                margin-bottom: 10px;
            }

            /* Nút submit */
            input[type="submit"] {
                background-color: #000;
                color: #fff;
                border: none;
                padding: 10px;
                cursor: pointer;
            }

            /* Icon */
            .icon {
                width: 20px;
                height: 20px;
                margin-right: 10px;
            }
        </style>
    </center>
</body>

</html>