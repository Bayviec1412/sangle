<?php 
$sql_all="select * from chitietsanpham";
$query_all=mysqli_query($conn, $sql_all);
?>
				<p style="font-size: 17px; margin-top: 10px;">Trang chủ > Điện thoại > iPhone</p>
				<hr>
				<p style="background: #e6e6e6; padding: 10px; border-left: 5px solid blue; font-weight: bold; font-size: 18px;">IPHONE</p>
				<div class="sanphamall">
					<ul>
						<?php
						while ($dong_all=mysqli_fetch_array($query_all, MYSQLI_ASSOC)) {
						?>
						<li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_all['id_sanpham'] ?>">
							<img src="admincp/modules/quanlychitietsanpham/uploads/<?php echo $dong_all['hinhanh'] ?>" width="200px" height="200px"></br></br>
							<p><?php echo $dong_all['tensanpham'] ?></br><span style="color: red; font-size: 14px;"><?php echo $dong_all['gia'].'đ' ?></span></p>
						</a></li>
						<?php } ?>
					</ul>
			