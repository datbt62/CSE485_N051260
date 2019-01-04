
<?php
     $sql="select * from nhacc where MaNCC='$_GET[id]'";
    
	 $run=mysqli_query($cnn,$sql);
	 $dong= mysqli_fetch_array($run);
?>
<style>
th{
	background:#666	
	}
</style>

<form action="modules/quanlynhacungcap/xuly.php?id=<?php echo $dong['MaNCC']?>" method="post" enctype="multipart/form-data">
<table class="table" width="100%" border="1">
<thead class="thead-dark">
  <tr>
    <th colspan="2"><div align="center">Sửa Thông tin Nhà cung cấp</div></th>
  </tr>
  </thead>
  <tr>
    <td>Tên Nhà cung cấp</td>
    <td><input type="text" name="TenNCC" value="<?php echo $dong['TenNCC']?>"></td>
  </tr>
  
    <td>Số điện thoại</td>
    <td><input type="text" name="SDT" value="<?php echo $dong['SDT']?>"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="Email" value="<?php echo $dong['Email']?>"></td>
  </tr>
   <tr>
    <td>Địa chỉ</td>
    <td><input type="text" name="DiaChi" value="<?php echo $dong['DiaChi']?>"></td>
  </tr>
   
  <tr>
    <td colspan="2"> <div align="center">
      <button name="sua" value="Sửa" style="background-color:#CCC; font-size:24px; font-family:'Times New Roman', Times, serif">Sửa</button>
      </div>
      </td>
  </tr>
</table>
</form>
