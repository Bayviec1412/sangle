<?php 
	include('../config.php');
	$id=$_GET['id'];
	$tenloaisanpham=$_POST['tenloaisanpham'];
	$soluong=$_POST['soluong'];
	if(isset($_POST['them'])){
		//them
		$sql="INSERT INTO loaisanpham (tenloaisanpham, soluong) values ('$tenloaisanpham', '$soluong')";
		if(!mysqli_query($conn, $sql)){
			die('Lỗi sql: '.mysqli_error($conn));
		}
		header('location:../../admin_index.php?quanly=quanlyloaisanpham&action=them');
	}elseif (isset($_POST['sua'])) {
		//sua
		 $sql="update loaisanpham set tenloaisanpham='$tenloaisanpham', soluong='$soluong' where id_loaisanpham='$id'";
    mysqli_query($conn, $sql);
  	header('location:../../admin_index.php?quanly=quanlyloaisanpham&action=sua&id='.$id);
	}else{
		//xoa
		$sql="delete from loaisanpham where id_loaisanpham=$id";
  	mysqli_query($conn, $sql);
  	header('location:../../admin_index.php?quanly=quanlyloaisanpham&action=them');
	}
?>