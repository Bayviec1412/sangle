<p style="font-size: 17px; margin-top: 10px; padding-top: 10px; padding-left: 10px;">Trang chủ > Kho hàng > Các loại sản phẩm</p>
<hr>

<div class="row" style="background-color: #FFF;">
<div class="col-md-4">
<div class="left">
	<?php 
	if (isset($_GET['action'])) {
		$tam=$_GET['action'];
	}else{
		$tam=='';
	}if($tam=='them'){
		include('modules/quanlyloaisanpham/them.php');
	}if($tam=='sua'){
		include('modules/quanlyloaisanpham/sua.php');
	}
	
	?>
</div>
</div>

<div class="col-md-8">
<div class="right">
	<?php 
	include('modules/quanlyloaisanpham/lietke.php');
	?>
</div>
</div>
</div>