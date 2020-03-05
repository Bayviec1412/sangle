<?php 
	$sql="select * from loaisanpham where id_loaisanpham=$_GET[id]";
	$run=mysqli_query($conn, $sql);
	$dong=mysqli_fetch_array($run, MYSQLI_ASSOC);
?>

<form action="modules/quanlyloaisanpham/xuly.php?id=<?php echo $dong['id_loaisanpham'] ?>" method="post" enctype="multipart/form-data">

<p style="background: #e6e6e6; padding: 10px; border-left: 5px solid blue; font-weight: bold; font-size: 18px;">Quản lý sản phẩm</p>
</br></br>
<table width="100%" border="1">
	<tr>
		<td colspan="2"><div align="center">Sửa loại sản phẩm</div>
		</td>
	</tr>
	<tr>
		<td width="129">Tên loại sản phẩm</td>
		<td width="144"><input type="text" name="tenloaisanpham" value="<?php echo $dong['tenloaisanpham'] ?>"></td>
	</tr>
	<tr>
		<td>Số lượng</td>
		<td><input type="text" name="soluong" value="<?php echo $dong['soluong'] ?>"></td>
	</tr>
	<tr>
		<td colspan="2"><div align="center">
		<input type="submit" name="sua" id="sua" value="Sửa" style="padding: 0px 8px;"></div>
		</td>
	</tr>
</table>
</form>