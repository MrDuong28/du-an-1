<div class="menu">
    <ul>
        <div class="logo"> <a href="index.php">
                <li> <img style="width: 200px; margin-bottom: 70px;" src="img/logo.jpeg" alt=""></li>
            </a> </div>
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
                    </div>
                </li>
            </div>
            <!-- <li><a href="huongdanmuahang.php">Hướng Dẫn Mua Hàng</a></li> -->
            <!-- <li><a href="chi_tiet.php">liên hệ</a></li> -->
             <li><?php include("chuc_nang/gio_hang/vung_gio_hang.php"); ?></li> 
            <li>
                <?php include("chuc_nang/tim_kiem/vung_tim_kiem.php"); ?>
            </li>
            <li>
                <a href=""><img src="img/giohang.png" alt="" style="width: 30px; margin-top: -2px;"></a>
            </li>
        </div>

    </ul>

</div>

<style>
    .menu .dropdown {
        position: relative;
        display: inline-block;
    }

    .menu .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        border: 1;
        width: 150px;
        text-align: center;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        font-size: 10px;

    }

    .menu .dropdown-content a {
        font-size: small;
        font-weight: 400;
        border-bottom: 1px solid #ededed;

    }

    .menu .dropdown-content a:hover {
        background-color: #bbb;


    }



    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>