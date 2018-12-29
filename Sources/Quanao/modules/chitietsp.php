<?php 

include('modules/connect/config.php');
mysqli_set_charset($cnn,"utf8");
$sql_chitietsp ="select * from sanpham,loaisp where (sanpham.maloaisp=loaisp.maloaisp) and (tensp='$tensp')";
$sql_chitietsp .="and (loaisp.tenloaisp ='$tenloaisp');";
$result=mysqli_query($cnn,$sql_chitietsp);
if(!$result){
  die("Không thể thực hiện câu lệnh sql:".mysqli_error($cnn));
  exit();
}


while ($row= mysqli_fetch_array($result)) {?>
 <div class="col-md-3">
    
    <table align=center>
    <tr>
    <td >
    <?php echo '<img src='.$row['HinhAnh'].' height=320 width=210>'; ?>
    </td>
    </tr>
    <tr>
      <td>
      <?php echo '<h4> Mã sản phẩm: '.$row['masp'].'</h4>'; ?>
      </td>
    </tr>
    <tr>
    <td>
    <?php echo '<h4>'.$row['tensp'].' '.$row['tenloaisp'].'</h4>'; ?>
    </td>
    </tr>
    

    <tr>
    <td>
    <p><strong>Giá gốc: 
    <?php echo ''.$row['DonGia'].' Đồng</strong></p>'; ?>
    </td>
    </tr>
    <tr>
      <td>
        <p><strong>Khuyến mãi:
        <?php echo ' '.$row['khuyenmai'].' % </strong></p>';?>
        
      </td>
    </tr>

    <tr>
    <td colspan="">
    <button class="btn btn-warning" id="dathang">Thêm giỏ hàng</button>
    </td>    
    </tr>

    </table>
    
</div>
  <?php } ?>