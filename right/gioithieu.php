<div id="carousel-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-generic" data-slide-to="1"></li>
    <li data-target="#carousel-generic" data-slide-to="2"></li>
    <li data-target="#carousel-generic" data-slide-to="3"></li>
    <li data-target="#carousel-generic" data-slide-to="4"></li>
    <li data-target="#carousel-generic" data-slide-to="5"></li>
  </ol> 

  <!-- Wrapper for slides -->
<div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/gt.png" width="100%">
    </div>
    <div class="carousel-item">
      <img src="images/gt1.png" width="100%">
    </div>
    <div class="carousel-item">
      <img src="images/gt2.png" width="100%">
    </div>
    <div class="carousel-item">
      <img src="images/gt3.png" width="100%">
    </div>
    <div class="carousel-item">
      <img src="images/gt4.png" width="100%">
    </div>
    <div class="carousel-item">
      <img src="images/gt5.png" width="100%">
    </div>
  </div>
</div> 
</div> 

<div class="gioithieu">
<p style="background: #d9d9d9; padding: 10px; border-left: 5px solid blue; margin-top: 30px;">Sản phẩm nổi bật nhất</p>

<?php 
$sql_all="select * from chitietsanpham";
$query_all=mysqli_query($conn, $sql_all);
?>
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
        </div>
</div>
