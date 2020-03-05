<?php 
$sql_chitietsanpham="select * from chitietsanpham where id_sanpham=$_GET[id]";
$query_chitietsanpham=mysqli_query($conn, $sql_chitietsanpham);
$dong_chitietsanpham=mysqli_fetch_array($query_chitietsanpham, MYSQLI_ASSOC);
?>


	<div class="row" style="margin-top: 40px;">
		<div class="col-md-5">
			<img src="admincp/modules/quanlychitietsanpham/uploads/<?php echo $dong_chitietsanpham['hinhanh'] ?>" width="350px" height="350px">
		<p style="margin-top: 40px; margin-left: 100px; font-weight: bold; text-transform: uppercase;"><?php echo $dong_chitietsanpham['tensanpham'] ?></p>
			<p style="color: red; margin-left: 150px;"><?php echo $dong_chitietsanpham['gia'].'đ' ?></p>
      <a href="index.php?xem=giohang&add=<?php echo $dong_chitietsanpham['id_sanpham']?>"><button type="submit" class="btn btn-default" style="background-color: #2e2ed1; color: #FFF; padding: 15px 32px; font-size: 16px; margin-left: 110px; font-weight: bold;">MUA NGAY</button></a>

		</div>
		<div class="col-md-6">

			<table class="table">
    <thead>
      <tr>
        <th>Thông số kỹ thuật</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Màn hình:</td>
        <td><span style="color: blue">Super AMOLED</span>, 5.6", HD+</td>
        </tr>
      <tr>
        <td>Hệ điều hành:</td>
        <td style="color: blue">Android 8.0 (Oreo)</td>
      </tr>
      <tr>
        <td>Camera sau: </td>
        <td>13 MP</td>
      </tr>
      <tr>
        <td>Camera trước:</td>
        <td>8 MP</td>
      </tr>
      <tr>
        <td>CPU:</td>
        <td style="color: blue">Exynos 7870 8 nhân 64-bit</td>
      </tr>
      <tr>
        <td>RAM:</td>
        <td>3 GB</td>
      </tr>
      <tr>
        <td>Bộ nhớ trong:</td>
        <td>32 GB</td>
      </tr>
      <tr>
        <td>Thẻ nhớ:</td>
        <td style="color: blue">MicroSD, hỗ trợ tối đa 256 GB</td>
      </tr>
      <tr>
        <td>Thẻ SIM:</td>
        <td style="color: blue">2 Nano SIM, Hỗ trợ 4G</td>
      </tr>
      <tr>
        <td>Dung lượng pin:</td>
        <td>3000 mAh</td>
      </tr>
    </tbody>
  </table>
  <div class="col-md-6" style="border: 0.5px solid blue; border-radius: 3px; text-align: center; color: blue; padding-top: 5px; padding-bottom: 5px; margin-bottom: 20px; margin-left: 140px;">Xem cấu hình chi tiết</div>
		</div>
	</div>