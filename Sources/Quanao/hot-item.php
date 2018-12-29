<div class="hot-item">
    <span class="border-bottom"><h4 align=center>HOT ITEM</h4></span>
    
<div class="row">
<?php 

include('modules/connect/config.php');
mysqli_set_charset($cnn,"utf8");
$sql_hotitiem ="select * from sanpham,loaisp where (sanpham.maloaisp=loaisp.maloaisp)  order by khuyenmai desc limit 4;";
$ketqua=mysqli_query($cnn,$sql_hotitiem);
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
      <td>
      <?php echo '<h4> Mã sản phẩm: '.$dong['masp'].'</h4>'; ?>
      </td>
    </tr>
    <tr>
    <tr>
    <td>
    <?php echo '<h4>'.$dong['tensp'].' '.$dong['tenloaisp'].'</h4>'; ?>
    </td>
    </tr>
    

    <tr>
    <td>
    <p><strong>Giá gốc: 
    <?php echo ''.$dong['DonGia'].' Đồng</strong></p>'; ?>
    </td>
    </tr>
    <tr>
      <td>
        <p><strong>Khuyến mãi:
        <?php echo ' '.$dong['khuyenmai'].'% </strong></p>';?>
        
      </td>
    </tr>

    <tr>
    <td>
    <button class="btn btn-warning" id="themgiohang">Thêm giỏ hàng</button>
    </td>    
    </tr>

    </table>
    

</div>
<?php } ?>
</div>
</div>