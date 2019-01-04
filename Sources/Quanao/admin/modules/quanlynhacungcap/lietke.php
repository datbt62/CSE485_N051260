
<?php
$sql="select * from nhacc ";
$run=mysqli_query($cnn,$sql);
?>


<table class="table table-border" width="100%" border="1">
<thead class="thead-dark">
  <tr>
    <th colspan="8">Danh Sách Nhà Cung Cấp</th>
  </tr>
  </thead>
  <thead class="thead-dark"> 
  <tr>
   <th><em><strong>Số thứ tự</strong></em></th>
    <th><em><strong>Tên Nhà cung cấp</strong></em></th>
    <th><em><strong>Mã Nhà cung cấp</strong></em></th>
    <th><em><strong>Số điện thoại</strong></em></th>
    <th><em><strong>Email </strong></em></th>
    <th><em><strong>Địa Chỉ</strong></em></th>
    
    <th colspan="2"><em><strong>Quản lý</strong></em></th>
  </tr>
  </thead>
  <?php
  $i=1;
 while ($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
     <td height="30"><?php echo $i ?></td>
    <td><?php echo $dong['TenNCC']; ?></td>
    <td><?php echo $dong['MaNCC']; ?></td>
    <td><?php echo $dong['SDT']; ?></td>
    <td><?php echo $dong['Email']; ?></td>

   
    
    <td><?php echo $dong['DiaChi']; ?></td>
    
    
    <td><a href="index.php?quanly=quanlynhacungcap&ac=sua&id=<?php echo $dong['MaNCC']?>">Sửa</td>
    <td align="center"><a href="modules/quanlynhacungcap/xuly.php?id=<?php echo $dong['MaNCC'] ?>">Xoá</a></td>
  </tr>
  <?php
$i++;
  }
  ?>
</table>

