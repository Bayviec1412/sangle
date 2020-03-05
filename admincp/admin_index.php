<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Quản trị website</title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="web_admin.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
		session_start();
		if (!isset($_SESSION['dangnhap'])) {
			header('location:login.php');
		}
	?>
	<div class="container-fluid">
		<?php 
			include('modules/config.php');
			include('modules/admin_header.php'); 
			include('modules/admin_menu.php');
		?>
	</div>

	<div class="container">
		<?php 
			include('modules/admin_content.php');

		?>
	</div>

	<div class="container-fluid">
		<?php 
			include('modules/admin_footer.php');
		?>
	</div>
</body>
</html>