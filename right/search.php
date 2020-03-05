
<?php 
	if (isset($_POST['search'])) {
		$search=$_POST['searchtext'];
		$sql_search="select * from chitietsanpham where tensanpham LIKE '%$search%'";
		$query_search=mysqli_query($conn, $sql_search);
	}
?>
				<p style="background: #e6e6e6; padding: 10px; border-left: 5px solid blue; font-weight: bold; font-size: 18px;">Tất cả kết quả</p>
				<div class="sanphamall">
					<?php 
						if($count=mysqli_num_rows($query_search)==0) { ?>
					<p>Không tìm thấy sản phẩm nào</p>
					<?php 
						}else{
					?>
					<ul>
						<?php
						while ($dong_search=mysqli_fetch_array($query_search, MYSQLI_ASSOC)) {
						?>
						<li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_search['id_sanpham'] ?>">
							<img src="admincp/modules/quanlychitietsanpham/uploads/<?php echo $dong_search['hinhanh'] ?>" width="200px" height="200px"></br></br>
							<p><?php echo $dong_search['tensanpham'] ?></br><span style="color: red; font-size: 14px;"><?php echo $dong_search['gia'].'đ' ?></span></p>
						</a></li>
						<?php 
							}
						}
					 ?>
					</ul>
