<?php 
	$sql_chitiet="select * from chitietsanpham where id_loaisanpham='$_GET[id]'";
	$query=mysqli_query($conn, $sql_chitiet);
?>

<?php 
	$sql_loaisanpham="select * from loaisanpham where id_loaisanpham='$_GET[id]'";
	$query_loaisanpham=mysqli_query($conn, $sql_loaisanpham);
	$dong_loaisanpham=mysqli_fetch_array($query_loaisanpham, MYSQLI_ASSOC);
?>
				<p style="font-size: 17px; margin-top: 10px;">Trang chủ > <?php echo $dong_loaisanpham['tenloaisanpham'] ?></p>
				<hr>
				<p style="background: #e6e6e6; padding: 10px; border-left: 5px solid blue; font-weight: bold; font-size: 18px;"><?php echo $dong_loaisanpham['tenloaisanpham'] ?></p>
				<div class="sanphamall">
					<ul>
						<?php
						while ($dong_chitiet=mysqli_fetch_array($query, MYSQLI_ASSOC)) {
						?>
						<li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_chitiet['id_sanpham'] ?>">
							<img src="admincp/modules/quanlychitietsanpham/uploads/<?php echo $dong_chitiet['hinhanh'] ?>" width="200px" height="200px"></br></br>
							<p><?php echo $dong_chitiet['tensanpham'] ?></br>
							<span style="color: red; font-size: 14px;"><?php echo $dong_chitiet['gia']. 'đ' ?></span></p>
						</a></li>
						<?php } ?>
					</ul>
