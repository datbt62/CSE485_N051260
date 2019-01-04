
<?php
$sql="select * from admin";
$run=mysqli_query($cnn,$sql);
?>


<table class="table table-border" width="100%">
<thead class="thead-dark">
  <tr>
    <th colspan="8">Danh Sách Tài Khoản Nhân Viên</th>
  </tr>
  </thead>
  <thead class="thead-dark"> 
  <tr>
   <th><em><strong>Số thứ tự</strong></em></th>
    <th><em><strong>Tên tài khoản</strong></em></th>
    <th><em><strong>Tên người dùng</strong></em></th>
    <th><em><strong>Giới Tính </strong></em></th>
    <th><em><strong>Ngày Sinh</strong></em></th>
    <th><em><strong>Số Điện thoại</strong></em></th>
    
    <th colspan="2"><em><strong>Quản lý</strong></em></th>
  </tr>
  </thead>
  <?php
  $i=1;
 while ($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
     <td height="39"><?php echo $i ?></td>
    
    
    <td><?php echo $dong['username']; ?></td>
    <td><?php echo $dong['hoten']; ?></td>
    <td><?php echo $dong['gioitinh']; ?></td>

   
    <td><?php echo $dong['ngaysinh']; ?></td>
    
    <td><?php echo $dong['sdt']; ?></td>

    <?php if($dong['quyentruycap']==1){?><td>Không thể sửa</td><td>Không thể xóa</td> <?php }else{?> 
    <td><a href="index.php?quanly=quanlytaikhoan&ac=sua&id=<?php echo $dong['id_user']?>">Sửa</td>
    <td align="center"><a href="modules/quanlytaikhoan/xuly.php?id=<?php echo $dong['id_user'] ?>">Xoá</a></td>
  </tr>
  
    <?php }
$i++;
  }
  ?>
</table>

