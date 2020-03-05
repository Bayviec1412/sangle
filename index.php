<!DOCTYPE html>
<html>
<head>
	<title>PhucAnh Technology</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="web.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="container-fluid">
			<?php 
			include('admincp/modules/config.php');
			include('header.php'); 
			include('menu.php');						
			?>
	</div>	

	<div class="container-fluid">
		<?php 			
			include('content.php');
		?>
	</div>
	<div class="container-fluid">
			<?php include('footer.php'); ?>
	</div> 

</body>
</html>


