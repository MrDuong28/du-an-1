<?php 
	$so_luong=0;
	if(isset($_SESSION['id_them_vao_gio']))
	{
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i]; 
		}
	}
?>
<a href="?thamso=gio_hang"><img src="img/giohang.png" style="width: 30px; margin-top: -5px; padding-right: 10px; margin-right: 30px;"alt=""></a>
