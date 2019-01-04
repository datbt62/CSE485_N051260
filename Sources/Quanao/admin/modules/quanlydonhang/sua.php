
<?php
     $sql="select * from hd where mahd='$_GET[id]'";
	 $run=mysqli_query($cnn,$sql);
	 $dong= mysqli_fetch_array($run);
?>
<style>
th{
	background:#666	
	}
</style>

<form action="modules/quanlysanpham/xuly.php?id=<?php echo $dong['mahd']?>" method="post" enctype="multipart/form-data">
<table class="table" width="100%" border="1">
<thead class="thead-dark">
  <tr>
    <th colspan="2"><div align="center">Sửa Trang Thái Hóa Đơn</div></th>
  </tr>
  </thead>
  <tr>
  <td>Mã HD</td>
  <td><?php echo $dong['mahd']; ?></td>
  </tr>
  <tr>
    <td>Đã Thanh Toán</td>
    <td><select name="thanhtoan" id="">
         <option value="1">Chưa Thanh Toán</option>
         <option value="2">Đã Thanh Toán</option>
         
    </select></td>
  </tr>
  
    <td>Tình Trạng Giao</td>
    <td><select name="tinhtrang" id="">
    <option value="1">Chưa Giao Hàng</option>
    <option value="2">Đã Giao Hàng</option>
    </select></td>
  </tr>
</table>
</form>
