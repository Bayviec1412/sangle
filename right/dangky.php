<?php 
	if (isset($_POST['dangky'])) {
		$tenkhachhang=$_POST['tenkhachhang'];
		$dienthoai=$_POST['dienthoai'];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		$matkhau=$_POST['matkhau'];
		$sql_dangky="insert into dangky (tenkhachhang, dienthoai, email, diachi, matkhau) value ('$tenkhachhang','$dienthoai','$email','$diachi','$matkhau')";
		$run_query=mysqli_query($conn, $sql_dangky);
		if ($run_query) {
      echo '<script>alert("Đăng ký thành công. Chào mừng bạn đến với PhucAnh Technology!")</script>';
      /*header('location:index.php?xem=thongbao');*/
		}else{
			header('location:index.php?xem=dangky');
		}
	}
?>

<p style="font-size: 17px; margin-top: 10px;">Trang chủ > Đăng ký</p>
<hr>
<p style="background: #e6e6e6; padding: 10px; border-left: 5px solid blue; font-weight: bold; font-size: 18px;">Thông tin cá nhân</p>
<fieldset style="border: 1px solid gray;">
	
<legend style="margin-left: 90px; color: #FFF; margin-bottom: 20px; padding-left: 27px; padding-bottom: 4px; border: 1px solid gray; width: 230px; font-size: 20px; background-color: #2e2ed1;">Đăng ký thành viên</legend>
<form action="index.php?xem=dangky" method="post" enctype="multipart/form-data">
	
<form class="row" role="form">
	
  <div class="form-group">
    <label>Tên khách hàng</label>
    <div class="col-md-7">
      <input type="text" class="form-control" name="tenkhachhang" placeholder="Tên khách hàng">
    </div>
  </div>
  <div class="form-group">
    <label>Điện thoại</label>
    <div class="col-md-7">
      <input type="text" class="form-control" name="dienthoai" placeholder="Điện thoại">
    </div>
  </div>
  <div class="form-group">
    <label>Email</label>
    <div class="col-md-7">
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label>Địa chỉ</label>
    <div class="col-md-7">
      <input type="text" class="form-control" name="diachi" placeholder="Địa chỉ">
    </div>
  </div>
  <div class="form-group">
    <label>Mật khẩu</label>
    <div class="col-md-7">
      <input type="password" class="form-control" name="matkhau" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    
      <button type="submit" class="btn btn-default" name="dangky" style="background-color: #2e2ed1; margin-left: 170px; color: #FFF;">Đăng ký</button>
    
  </div>
</form>
</form>
</fieldset>