<p style="font-size: 17px; margin-top: 10px; padding-top: 10px; padding-left: 10px;">Trang chủ > Kho hàng > Thông tin sản phẩm</p>
<hr>
<div class="row" style="background-color: #FFF;">
<div class="col-md-5">
<div class="left">
	<?php 
	if (isset($_GET['action'])) {
		$tam=$_GET['action'];
	}else{
		$tam=='';
	}if($tam=='them'){
		include('modules/quanlychitietsanpham/themchitiet.php');
	}if($tam=='sua'){
		include('modules/quanlychitietsanpham/suachitiet.php');
	}
	
	?>
</div>
</div>

<div class="col-md-7">
<div class="right">
	<?php 
	include('modules/quanlychitietsanpham/lietkechitiet.php');
	?>
</div>
</div>
</div>