<div class="content" style="background-color: #FFF; margin-bottom: 20px;">
			<?php 
				if(isset($_GET['quanly'])){
					$tam=$_GET['quanly'];
				}else{
					$tam='';
				}if($tam=='quanlyloaisanpham'){
					include('modules/quanlyloaisanpham/main.php');
				}if($tam=='quanlychitietsanpham'){
					include('modules/quanlychitietsanpham/mainchitiet.php');
				}if($tam=='thongbao'){
					include('modules/admin_thongbao.php');
				}if ($tam=='thongtinkhachhang') {
					include('modules/customer.php');
				}if ($tam=='khachhang'){
					include('modules/customerall.php');
				}if ($tam=='giohang') {
					include('modules/admin_cart.php');
				}if ($tam=='phanhoi') {
					include('modules/phanhoi.php');
				}if ($tam=='traloi') {
					include('modules/traloi.php');
				}		
			?>
		</div>
		<div class="clear"></div>