<div class="hot-item">
  <div class="tittle">
    <span class="border-bottom" ><h4 align=center><u>HOT ITEMS</u> </h4></span>
  </div>
    <br>
    
<div class="row">
<?php 

include('modules/connect/config.php');
mysqli_set_charset($cnn,"utf8");
$sql_hotitem ="select * from sanpham,loaisp where (sanpham.maloaisp=loaisp.maloaisp)  order by khuyenmai desc limit 4;";
$ketqua=mysqli_query($cnn,$sql_hotitem);
if(!$ketqua){
  echo "<h5 align=center>Chưa có itiem nào hot</h5>";
  
}
while ($dong= mysqli_fetch_array($ketqua)) {
?>
<div class="col-md-3">

    <table align=center>
    <tr>
    <td >
    <?php echo '<img src='.$dong['HinhAnh'].' height=320 width=210>'; ?>
    </td>
    </tr>
    <tr>
      <td align=center>
      <?php echo '<h4> Mã sản phẩm: '.$dong['masp'].'</h4>'; ?>
      </td>
    </tr>
    <tr>
    <tr>
    <td align=center>
    <?php echo '<h4>'.$dong['tensp'].' '.$dong['tenloaisp'].'</h4>'; ?>
    </td>
    </tr>
    

    <tr>
    <td align=center>
    <p><strong>Giá gốc: 
    <?php echo ''.$dong['DonGia'].' Đồng</strong></p>'; ?>
    </td>
    </tr>
    <tr>
      <td align=center>
        <p><strong>Khuyến mãi:
        <?php echo ' '.$dong['khuyenmai'].'% </strong></p>';?>
        
      </td>
    </tr>
    <?php $giamgia = $dong['DonGia']-$dong['DonGia']*$dong['khuyenmai']/100 ?>
    <tr>
      <td align=center>
        <p><strong>Giảm còn:
        <?php echo ' '.$giamgia.' ĐỒNG </strong></p>';?>
        
      </td>
    </tr>

    <tr>
    <td align=center>
    <button class="btn btn-warning" id="themgiohang" ><a href="index.php?page=cart&id=<?php echo $dong['masp']?>">Thêm giỏ hàng</a> </button>
    </td>    
    </tr>

    </table>
    

</div>
<?php } ?>
</div>
</div>
<br>