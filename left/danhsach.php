<?php 
	$sql_loaisanpham="select * from loaisanpham";
	$query=mysqli_query($conn, $sql_loaisanpham);
?>
				<p style="text-align: center; color: #000; background: #d9d9d9; padding: 10px; font-weight: bold; font-size: 18px;">DANH MỤC SẢN PHẨM</p>
				<div class="listsanpham">
					<ul>
						<?php 
							while ($dong_sanpham=mysqli_fetch_array($query, MYSQLI_ASSOC)) {
								
						?>
						<li><a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_sanpham['id_loaisanpham'] ?>"><span style="text-transform: uppercase; font-size: 14.5px; color: #000;"><?php echo $dong_sanpham['tenloaisanpham'] ?></span><hr width="80%" align="left"></a></li>
						<?php } ?>
					</ul>
				</div>  
