<div class="content">
	<div class="row">
		<div class="col-md-3">
			<div class="left">
				<?php 
					include('left/danhsach.php');
				?>
			</div>
		</div>

		<div class="col-md-9">
			<div class="right">
				<?php 
					if(isset($_GET['xem'])){
						$tam=$_GET['xem'];
					}else{
						$tam='';
					}if($tam=='chitietloaisanpham'){
						include('right/chitietloaisanpham.php');
					}elseif($tam=='chitietsanpham'){
						include('right/chitietsanpham.php');
					}elseif($tam=='dangky'){
						include('right/dangky.php');
					}elseif($tam=='thongbao'){
						include('right/thongbao.php');
					}elseif($tam=='dangnhap'){
						include('right/dangnhap.php');
					}elseif($tam=='giohang'){
						include('right/cart.php');
					}elseif(isset($_POST['search'])){
						include('right/search.php');
					}elseif($tam=='tatcasanpham'){
						include('right/tatcasanpham.php');
					}elseif($tam=='lienhe'){
						include('right/lienhe.php');
					}else
						include('right/gioithieu.php');
					
				?>
			</div>
		</div>
	</div>
		<div class="clear"></div>