
<?php
$sql="select * from sanpham inner join loaisp on  loaisp.maloaisp=sanpham.maloaisp left join nhacc on nhacc.MaNCC=sanpham.Mancc ";
$run=mysqli_query($cnn,$sql);
?>


<table class="table table-border" width="100%" border="1">
<thead class="thead-dark">
  <tr>
    <th colspan="14">Danh Sách Sản phẩm</th>
  </tr>
  </thead>
  <thead class="thead-dark"> 
  <tr>
   <th><em><strong>Số thứ tự</strong></em></th>
    <th><em><strong>Hình Ảnh</strong></em></th>
    <th><em><strong>Mã SP</strong></em></th>
    <th><em><strong>Tên SP </strong></em></th>
    <th><em><strong>Loại SP</strong></em></th>
    <th><em><strong>Nhà cung cấp</strong></em></th>
     <th><em><strong>Đơn Giá</strong></em></th>
    <th><em><strong>Khuyến mãi</strong></em></th>
    <th colspan="2"><em><strong>Quản lý</strong></em></th>
  </tr>
  </thead>
  <?php
  $i=1;
 while ($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
     <td height="117"><?php echo $i ?></td>
    <td><?php echo '<img src="'.$dong['HinhAnh'].'" width="60" height="60">' ?></td>
    
    <td><?php echo $dong['masp']; ?></td>
    <td><?php echo $dong['tensp']; ?></td>
    <td><?php echo $dong['tenloaisp']; ?></td>

   
    <td><?php if($dong['Mancc']=''){echo 'Không có nhà cc';}else{echo $dong['TenNCC'];} ?></td>
    
    <td><?php echo $dong['DonGia']; ?> VNĐ</td>
    
    <td><?php echo $dong['khuyenmai']; ?></td>
    
    <td><a href="index.php?quanly=quanlysanpham&ac=sua&id=<?php echo $dong['masp']?>">Sửa</td>
    <td align="center"><a href="modules/quanlysanpham/xuly.php?id=<?php echo $dong['masp'] ?>">Xoá</a></td>
  </tr>
  <?php
$i++;
  }
  ?>
</table>

