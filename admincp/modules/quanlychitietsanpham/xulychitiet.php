<?php 
	include('../config.php');
	$id=$_GET['id'];
	$tensanpham=$_POST['tensanpham'];
	$mota=$_POST['motasanpham'];
	$gia=$_POST['gia'];
	$loaisanpham=$_POST['loaisanpham'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
	if(isset($_POST['them'])){
		//them
		$sql="INSERT INTO chitietsanpham (tensanpham, mota, gia, id_loaisanpham, hinhanh) values ('$tensanpham', '$mota', '$gia', '$loaisanpham', 'hinhanh')";
		if(!mysqli_query($conn, $sql)){
			die('Lỗi sql: '.mysqli_error($conn));
		}
		header('location:../../admin_index.php?quanly=quanlychitietsanpham&action=them');
	}elseif (isset($_POST['sua'])) {
		//sua
		if ($hinhanh!='') {
		 $sql="update chitietsanpham set tensanpham='$tensanpham', mota='$mota', gia='$gia', id_loaisanpham='$loaisanpham', hinhanh='$hinhanh' where id_sanpham='$id'";
		}else{
		$sql="update chitietsanpham set tensanpham='$tensanpham', mota='$mota', gia='$gia', id_loaisanpham='$loaisanpham' where id_sanpham='$id'";	
		}
    mysqli_query($conn, $sql);
  	header('location:../../admin_index.php?quanly=quanlychitietsanpham&action=sua&id='.$id);
	}else{
		//xoa
		$sql="delete from chitietsanpham where id_sanpham=$id";
  	mysqli_query($conn, $sql);
  	header('location:../../admin_index.php?quanly=quanlychitietsanpham&action=them');
	}
?>