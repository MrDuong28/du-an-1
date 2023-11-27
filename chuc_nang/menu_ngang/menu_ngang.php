<div class="menu">
            <ul>
            <div class="logo">    <li> <img style="width: 200px; margin-bottom: 70px;" src="img/logo.jpeg" alt=""></li> </div>
                <div class="menu-trong"> 
                <div class="home">
                    <li>
                        <a href="index.php">
                            <span class="glyphicon glyphicon-home"></span>Home</a>
                        </li>
                </div>



                <li><a href="gioithieu.php">Giới Thiệu</a></li>
                    <div class="dropdown">
                    <li>
                        <div class="dropbtn"><a href="index.php">Sản phẩm</a></div>
                        <div class="dropdown-content">
                        <a href=""><?php include("chuc_nang/menu_doc/menu_doc.php"); ?></a> 
                    </li>
                    </div>
                <li><a href="huongdanmuahang.php">Hướng Dẫn Mua Hàng</a></li>
                <li><a href="chi_tiet.php">liên hệ</a></li>
                <li><?php include("chuc_nang/gio_hang/vung_gio_hang.php");?></li>
                </div>
                
            </ul>

</div>

<style>
    .menu .dropdown{
        position: relative;
        display: inline-block;
    }
    .menu .dropbtn {
        background-color: white;
        color: white;
    }
    .menu .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        border: 1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .dropdown-content a:hover {background-color: white;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: white;}
</style>