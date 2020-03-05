<?php 
	$sql="select * from chitietsanpham, loaisanpham where loaisanpham.id_loaisanpham=chitietsanpham.id_loaisanpham order by chitietsanpham.id_sanpham desc";
	$run=mysqli_query($conn, $sql);
?>

<p style="background: #e6e6e6; padding: 10px; border-left: 5px solid blue; font-weight: bold; font-size: 18px;">Kho hàng của bạn</p>
<p style="font-style: italic;">(Sản phẩm hiện có: 120)</p>
<table width="635" border="1">
	<tr>
		<td>ID</td>
		<td>Tên sản phẩm</td>
		<td>Hình ảnh</td>
		<td>Giá</td>
		<td>Loại sản phẩm</td>
		<td>Mô tả</td>
		<td colspan="2" align="center">Quản lý</td>
	</tr>

<?php 
$i=1;
while($dong=mysqli_fetch_array($run, MYSQLI_ASSOC)){
?>

	<tr>	
		<td><?php echo $i; ?></td>
		<td><?php echo $dong['tensanpham']; ?></td>
		<td><img src="modules/quanlychitietsanpham/uploads/<?php echo $dong['hinhanh'] ?>" width="60" height="60"></td>
		<td><?php echo $dong['gia']; ?></td>
		<td><?php echo $dong['tenloaisanpham']; ?></td>
		<td><?php echo $dong['mota']; ?></td>
		<td><a href="admin_index.php?quanly=quanlychitietsanpham&action=sua&id=<?php echo $dong['id_sanpham'] ?>">Sửa</a></td>
		<td><a href="modules/quanlychitietsanpham/xulychitiet.php?id=<?php echo $dong['id_sanpham'] ?>">Xóa</a></td>
	</tr>
<?php 
$i++;
}
?>
</table>