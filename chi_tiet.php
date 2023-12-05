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
		<link rel="stylesheet" href="giao_dien/csss.css">
		<style>
    /* Form */
    form {
      width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
    }

    /* Tiêu đề form */
    h1 {
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }

    /* Các trường input */
    input, textarea {
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

	</head>
	<body>
		<center>
        <div class="header_left">
          <ul>
            <li><span  style="color:red;"class="glyphicon glyphicon-earphone"></span>Hotline: 0914139010</li>
          </ul>
        </div>
        
			  <div class="menu">
          <?php include("chuc_nang/menu_ngang/menu_ngang.php");?>            
			  </div>

          <div class="conten_right" style="text-align:justify; color:#000;">
                <div class=gioithieu style="padding:10px; color:#6A6A6A;">
                    <div style="font-weight:bold; font-size:25px; color:#000;">TDT FASHION</div><br>
					<form action="mailto:your_email_address" method="post">
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
							<br>
							<br>
                          </div>  
                	</div>		
            </div>
				<div class="footer">
					<?php include('footer.php');?>
				</div>


		</center>
	</body>
</html>