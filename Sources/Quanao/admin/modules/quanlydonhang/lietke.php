
<?php
$sql="select * from hoadon inner join cthd on cthd.mahd=hoadon.mahd ";
$run=mysqli_query($cnn,$sql);
?>


<table class="table table-border" width="100%">
<thead class="thead-dark">
  <tr>
    <th colspan="14">Danh Sách Đơn Hàng</th>
  </tr>
  </thead>
  <thead class="thead-dark"> 
  <tr>
   <th><em><strong>Số thứ tự</strong></em></th>
    <th><em><strong>Mã hóa đơn</strong></em></th>
    <th><em><strong>Tên khách hàng</strong></em></th>
    <th><em><strong>Đỉa Chỉ</strong></em></th>
    <th><em><strong>Số điện thoại</strong></em></th>
    <th><em><strong>Email</strong></em></th>
    <th><em><strong>Ngày Đặt Hàng </strong></em></th>
    <th><em><strong>Trạng Thái Giao</strong></em></th>
    <th><em><strong>Tổng Tiền</strong></em></th>
    <th><em><strong>Đã Thanh Toán</strong></em></th>
    <th colspan="2"><em><strong>Quản lý</strong></em></th>
  </tr>
  </thead>
  <?php
  $i=1;
 while ($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
     <td height="117"><?php echo $i ?></td>
    <td><?php echo $dong['mahd'] ?></td>
    
    <td><?php echo $dong['TenKH']; ?></td>
    <td><?php echo $dong['duongxa'].','.$dong['quanhuyen'].','.$dong['tinh']; ?></td>
    <td><?php echo $dong['SDT']; ?></td>
    <td><?php echo $dong['Email']; ?></td>
   
    <td><?php echo $dong['NgayDat'] ?></td>
    
    <td><?php echo $dong['TinhTrangGiaoHang']; ?> </td>
    
    <td><?php echo $dong['TongTien']; ?></td>
    <td><?php echo $dong['DaThanhToan']; ?></td>
    
    <td><a href="index.php?quanly=quanlydonhang&ac=sua&id=<?php echo $dong['mahd']?>">Sửa</td>
    <td align="center"><a href="modules/quanlydonhang/xuly.php?id=<?php echo $dong['mahd'] ?>">Xoá</a></td>
  </tr>
  <?php
$i++;
  }
  ?>
</table>

