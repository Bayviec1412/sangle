<?php 
	$sql="select * from loaisanpham order by id_loaisanpham desc";
	$run=mysqli_query($conn, $sql);
?>
<p style="background: #e6e6e6; padding: 10px; border-left: 5px solid blue; font-weight: bold; font-size: 18px;">Kho hàng của bạn</p>
<p style="font-style: italic;">(Loại sản phẩm hiện có: 4)</p>
<center>
<table width="600" border="1">
	<tr>
		<td>STT</td>
		<td>Tên loại sản phẩm</td>
		<td>Số lượng</td>
		<td colspan="2">Quản lý</td>
	</tr>

<?php 
$i=1;
while($dong=mysqli_fetch_array($run, MYSQLI_ASSOC)){
?>

	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $dong['tenloaisanpham'] ?></td>
		<td><?php echo $dong['soluong'] ?></td>
		<td><a href="admin_index.php?quanly=quanlyloaisanpham&action=sua&id=<?php echo $dong['id_loaisanpham'] ?>">Sửa</a></td>
		<td><a href="modules/quanlyloaisanpham/xuly.php?id=<?php echo $dong['id_loaisanpham'] ?>">Xóa</a></td>
	</tr>

	<?php 
	$i++;
	}
	?>

</table>
</center>