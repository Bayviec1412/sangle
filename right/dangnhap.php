<?php 
	/*session_start();*/
	if (isset($_POST['dangnhap'])) {
		$email=$_POST['email'];
		$matkhau=$_POST['matkhau'];
		$sql_dangnhap="select * from dangky where email='$email' and matkhau='$matkhau' limit 1";
		$run_dangnhap=mysqli_query($conn, $sql_dangnhap);
		$count_dangnhap=mysqli_num_rows($run_dangnhap);
		if ($count_dangnhap==0) {
			echo '<script>alert("Email hoặc mật khẩu không đúng. Vui lòng thử lại!")</script>';
		}else{
			$_SESSION['dangnhap']=$email;
      echo '<script>alert("Đăng nhập thành công!")</script>';
			/*header('location:index.php?xem=giohang');*/
		}
	}
?>

<p style="font-size: 17px; margin-top: 10px;">Trang chủ > Đăng nhập</p>
<hr>
<p style="background: #e6e6e6; padding: 10px; border-left: 5px solid blue; font-weight: bold; font-size: 18px;">Đăng nhập</p>

<fieldset style="border: 1px solid gray;">
	
<legend style="margin-left: 90px; margin-bottom: 20px; padding-left: 17px; padding-bottom: 4px; border: 1px solid gray; width: 230px; font-size: 20px; background-color: #2e2ed1; color: #FFF">Đăng nhập thành viên</legend>
<form action="" method="post" enctype="multipart/form-data">

<form class="row" role="form">
	
  <div class="form-group">
  	
    <label>Email</label>
    <div class="col-md-7">
      <input type="text" class="form-control" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
  	
    <label>Mật khẩu</label>
    <div class="col-md-7">
      <input type="password" class="form-control" name="matkhau" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label style="margin-left: 135px;">
          <input type="checkbox"> Ghi nhớ mật khẩu
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    
      <button type="submit" class="btn btn-default" name="dangnhap" style="background-color: #2e2ed1; color: #FFF; margin-left: 170px;">Đăng nhập</button>
    <p style="margin-top: 20px; margin-left: 111px"><a href="#" style="color: #cb3434">Bạn quên email hoặc mật khẩu?</a></p>
<p style="margin-top: 20px; margin-left: 89px;">(Bạn chưa có tài khoản? <a href="index.php?xem=dangky" style="color: red;">Đăng ký ngay)</a></p>
	</div>
	</div>
</form>
</form>
</fieldset>


      