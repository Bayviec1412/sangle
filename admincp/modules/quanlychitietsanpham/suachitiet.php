<?php 
	$sql="select * from chitietsanpham where id_sanpham='$_GET[id]'";
	$run=mysqli_query($conn, $sql);
	$dong=mysqli_fetch_array($run, MYSQLI_ASSOC);
?>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
 <script>tinymce.init({ selector:'textarea' });</script>
<form action="modules/quanlychitietsanpham/xulychitiet.php?id=<?php echo $dong['id_sanpham'] ?>" method="post" enctype="multipart/form-data">

<p style="background: #e6e6e6; padding: 10px; border-left: 5px solid blue; font-weight: bold; font-size: 18px;">Quản lý thông tin sản phẩm</p>
</br></br>
<table width="450" border="1">
	<tr>
		<td colspan="2"><div align="center">Sửa thông tin sản phẩm</div></td>
	</tr>
	<tr>
		<td>Tên sản phẩm</td>
		<td><input type="text" name="tensanpham" value="<?php echo $dong['tensanpham'] ?>"></td>
	</tr>
	<tr>
		<td>Giá sản phẩm</td>
		<td><input type="text" name="gia" value="<?php echo $dong['gia'] ?>"></td>
	</tr>
	<tr>
		<td>Hình ảnh</td>
		<td><input type="file" name="hinhanh"><img src="modules/quanlychitietsanpham/uploads/<?php echo $dong['hinhanh'] ?>" width="60" height="60"></td>
	</tr>
	<tr>
		<td>Mô tả</td>
		<td><textarea name="motasanpham" cols="40" rows="15" value="<?php echo $dong['mota'] ?>"></textarea></td>
	</tr>

	<?php 
	$sql_loaisanpham="select * from loaisanpham";
	$run_loaisanpham=mysqli_query($conn, $sql_loaisanpham);
	?>

	<tr>
		<td>Loại sản phẩm</td>
		<td><select name="loaisanpham">
			<?php 
			while ($dong_loaisanpham=mysqli_fetch_array($run_loaisanpham, MYSQLI_ASSOC)){
				if($dong['id_loaisanpham']==$dong_loaisanpham['id_loaisanpham']){
			?>
			<option selected="selected" value="<?php echo $dong_loaisanpham['id_loaisanpham'] ?>"><?php echo $dong_loaisanpham['tenloaisanpham'] ?></option>
			<?php 
				}else{
			 ?> 
			 <option value="<?php echo $dong_loaisanpham['id_loaisanpham'] ?>"><?php echo $dong_loaisanpham['tenloaisanpham'] ?></option>
			<?php 
				}
				}
			?>			 
		</select></td>
	</tr>
	<tr>
		<td colspan="2"><div align="center">
 	 		<button name="sua" value="sua" style="padding: 0px 8px;">Sửa</button>
		</div></td>
	</tr>
</table>
</form>