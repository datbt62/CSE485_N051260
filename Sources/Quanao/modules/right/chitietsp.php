<?php 
//  fclose('slide.php');
//  fclose('hotitem.php');
include('modules/config.php');
mysqli_set_charset($cnn,"utf8");
$sql_chitietsp ="select * from sanpham,loaisp where (sanpham.maloaisp=loaisp.maloaisp) and (tensp='$tensp')";
$sql_chitietsp .="and (loaisp.tenloaisp ='$tenloaisp');";
$result=mysqli_query($cnn,$sql_chitietsp);
if(!$result){
  die("Không thể thực hiện câu lệnh sql:".mysqli_error($cnn));
  exit();
}


while ($row= mysqli_fetch_array($result)) {?>
 <div class="row mt-5">
    <div class="col-md-3">
    
    <?php echo '<img src='.$row['HinhAnh'].' style="width: 250px; ">'; ?>
    </div>
    <div class="col-md-7 ml-4">
    <div class="row">
    <?php echo '<h4>'.$row['tensp'].' '.$row['tenloaisp'].'</h4>'; ?>
    
    </div>

    <div class="row">
    <h4>Mô tả:</h4>
    <?php echo '<p>'.' '.$row['MoTa'].'</p>'; ?> 
    </div>

    <div class="row">
    <h4>Size:</h4>
    <select>
    <option value=”0″>S</option>
    <option value=”34″>M</option>
    <option value=”46″>L</option>
    <option value=”68″>XL</option>
    <option value=”812″>XXL</option>
    </select>
    
    </div>

    <div class="row">
    <h4>Giá: </h4>
    <?php echo '<h4><p> '.$row['DonGia'].' Đồng</p></h4>'; ?>
    </div>

    <div class="row">
    <button class="btn btn-warning" id="dathang">Đặt hàng</button>
    </div>
    </div>
    </div>
  <?php } ?>