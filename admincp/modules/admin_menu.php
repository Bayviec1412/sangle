<?php 
	if (isset($_GET['action'])&&$_GET['action']=='logout') {
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<div class="menu">
			<ul>
				<li><a href="admin_index.php?quanly=thongbao">Trang chủ</a></li>
				<li><a href="#">Kho hàng</a>
					<ul id="submenu">
						<li><a href="admin_index.php?quanly=quanlyloaisanpham&action=them">Các loại sản phẩm</a></li>
						<li><a href="admin_index.php?quanly=quanlychitietsanpham&action=them">Thông tin sản phẩm</a></li>
					</ul>
				</li>
				<li><a href="admin_index.php?quanly=khachhang">Khách hàng</a></li>
				<li><a href="admin_index.php?quanly=giohang">Giỏ hàng</a></li>
				
				<li><a href="admin_index.php?quanly=phanhoi">Phản hồi</a></li>
				<li style="float: right; font-style: italic;"><a href="#">Admin</a>
					<ul id="submenu">
						<li><a href="#">Cài đặt</a></li>
						<li><a href="admin_index.php?action=logout">Đăng xuất</a></li>
					</ul>
				</li>
			</ul>
		</div>