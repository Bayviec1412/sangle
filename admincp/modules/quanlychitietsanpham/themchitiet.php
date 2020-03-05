<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
 <script>tinymce.init({ selector:'textarea' });</script>
<form action="modules/quanlychitietsanpham/xulychitiet.php" method="post" enctype="multipart/form-data">
<p style="background: #e6e6e6; padding: 10px; border-left: 5px solid blue; font-weight: bold; font-size: 18px;">Quản lý thông tin sản phẩm</p>
</br></br>
<table width="450" border="1">
	<tr>
		<td colspan="2"><div align="center">Thêm sản phẩm vào kho hàng</div></td>
	</tr>
	<tr>
		<td>Tên sản phẩm</td>
		<td><input type="text" name="tensanpham"></td>
	</tr>
	<tr>
		<td>Giá sản phẩm</td>
		<td><input type="text" name="gia"></td>
	</tr>
	<tr>
		<td>Hình ảnh</td>
		<td><input type="file" name="hinhanh"></td>
	</tr>
	<tr>
		<td>Mô tả</td>
		<td><textarea name="motasanpham" cols="40" rows="15"></textarea></td>
	</tr>

	<?php 
	$sql="select * from loaisanpham";
	$run=mysqli_query($conn, $sql);
	?>

	<tr>
		<td>Loại sản phẩm</td>
		<td><select name="loaisanpham">
			<?php 
			while ($dong=mysqli_fetch_array($run, MYSQLI_ASSOC)){
			?>
			<option value="<?php echo $dong['id_loaisanpham'] ?>"><?php echo $dong['tenloaisanpham'] ?></option>
			<?php } ?>
		</select></td>
	</tr>
	<tr>
		<td colspan="2"><div align="center">
 	 		<button name="them" value="Thêm" style="padding: 0px 5px;">Thêm</button>
		</div></td>
	</tr>
</table>
</form>