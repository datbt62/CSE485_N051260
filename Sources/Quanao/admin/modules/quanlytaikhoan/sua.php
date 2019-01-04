
<?php
  $sql="select * from admin where id_user='$_GET[id]'";
	 $run=mysqli_query($cnn,$sql);
	 $dong= mysqli_fetch_array($run);
?>
<style>
th{
	background:#666	
	}
</style>

<form action="modules/quanlytaikhoan/xuly.php?id=<?php echo $dong['id_user']?>" method="post" enctype="multipart/form-data">
<table class="table" width="100%" border="1">
<thead class="thead-dark">
  <tr>
    <th colspan="2"><div align="center">Sửa Tài Khoản Nhân Viên</div></th>
  </tr>
  </thead>
  <tr>
    <td>Tên Tài Khoản</td>
    <td><input type="text" name="tentk" value="<?php echo $dong['username']?>"></td>
  </tr>
  
    <td>Tên Nhân Viên</td>
    <td><input type="text" name="tennv" value="<?php echo $dong['hoten']?>"></td>
  </tr>
  <tr>
    <td>Giới Tính</td>
    <td><input type="text" name="gioitinh" value="<?php echo $dong['gioitinh']?>"></td>
  </tr>
   <tr>
    <td>Số điện thoại</td>
    <td><input type="text" name="sdt" value="<?php echo $dong['sdt']?>"></td>
  </tr>
   <tr>
     <td>Ngày sinh (YYYY/MM/DD)</td>
     <td><input type="text" name="ngaysinh" value="<?php echo $dong['ngaysinh']?>" ></td>
   </tr>
   <tr>
     <td>Email</td>
     <td><input type="text" name="email" value="<?php echo $dong['email']?>" ></td>
   </tr>
   
  <tr>
    <td>Quyền truy cập</td>
    <td>
    <input type="text" name="quyen" value="<?php echo $dong['quyentruycap']?>"><p>1.Admin,2.Nhân viên</p>
    
   </td>
  </tr>
   
  <tr>
    <td colspan="2"> <div align="center">
      <button name="sua" value="Sửa" style="background-color:#CCC; font-size:24px; font-family:'Times New Roman', Times, serif">Sửa</button>
      </div>
      </td>
  </tr>
</table>
</form>
