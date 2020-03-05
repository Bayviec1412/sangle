
<?php 
	include('modules/config.php');
	session_start();
	//session_destroy();
	if (isset($_POST['login'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from admin where username='$username' and password='$password' limit 1";
		$query=mysqli_query($conn, $sql);
		$nums=mysqli_num_rows($query);
		if ($nums>0) {
			$_SESSION['dangnhap']=$username;
			header('location:admin_index.php');
		}else{
			header('location:login.php');
		}
	}
?>
<div class="container-fluid">
<form action="" method="post">
	<form class="row" role="form">
  <div class="form-group">
<center>
	<table width="350" height="230" style="background-color: #252577; margin-top: 100px; border-collapse: none; font-family: Arial, Helvetica, sans-serif; font-size: 15px; padding: 3px 10px;">
		<tr>
			<td colspan="2"><div align="center" style="font-size: 20px; padding-bottom: 6px; color: #FFF; border-bottom: 0.5px solid #CCC;">PhucAnh Technology</div></td>
		</tr>
		<tr>
			<td><input type="text" class="form-control" name="username" size="18" placeholder="Tên đăng nhập" style="height: 30px; margin-left: 72px; font-size: 15px;"></td>
		</tr>
		<tr>
			<td><input type="password" name="password" size="18" placeholder="Mật khẩu" style="height: 30px; margin-left: 72px; font-size: 15px;"></td>
		</tr>
		<tr>
			<td colspan="2">
					<div align="center">
						<input type="submit" name="login" id="button" value="Đăng nhập" style="height: 28px; font-size: 15px">
					</div>
			</td>
			
		</tr>
	</table>
</center>
</div>
</form>
</form>
</div>