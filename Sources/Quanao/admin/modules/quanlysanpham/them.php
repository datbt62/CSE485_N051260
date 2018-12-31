<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
th{
	background:#666;	
	}
	table{ font-size:18px;
 

	
	
}
	
</style>
<form action="modules/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data" >
  <table width="100%" border="1">
  <tr>
    <th height="39" colspan="2" align="center">Thêm Sản Phẩm</th>
  </tr>
  <tr>
    <td width="30%">&nbsp;<i class="fa fa-paw" style="font-size:24px"></i>&nbsp;&nbsp;Tên Sản Phẩm</td>
    <td width="70%"><input type="text" name="TenSP" required="required" /></td>
    </tr>
  
  <tr>
    <td>&nbsp;<i class="fa fa-tint" style="font-size:24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;Đơn Giá</td>
    <td><input type="text" name="Dongia" required="required" /></td>
    </tr>
    
   <tr>
     <td height="37">&nbsp;<i class="fa fa-shopping-basket" style="font-size:24px"></i>&nbsp;&nbsp;Khuyến mãi</td>
     <td><input type="text" name="Khuyenmai" required="required" /></td>
    </tr>
   
   <tr>
     <td>&nbsp;<i class="fa fa-history" style="font-size:24px"></i>&nbsp;&nbsp;Số Lượng Tồn</td>
     <td><input type="text" name="SoLuongTon" required="required" /></td>
    </tr>
     <?php
  $sql="select * from loaisp";
  $run=mysqli_query($cnn,$sql);
    
  ?>
  
   <tr>
    <td>&nbsp;<i class="fa fa-star" style="font-size:24px"></i>&nbsp;&nbsp;Loại Sản Phẩm </td>
    <td><select name="loaisp" required="required" >
      <option value="">-- --</option>
      <?php
    while($dong_loaisp=mysqli_fetch_array($run)){
		?>
      <option value="<?php echo $dong_loaisp['maloaisp']?>">
        <?php
    echo $dong_loaisp['tenloaisp']?>
        </option>
      <?php
	}
	?>
    </select></td>
     
    </tr>
   <?php
  $sql="select * from nhacc";
  $run=mysqli_query($cnn,$sql);
    
  ?>
  <tr>
    <td>&nbsp;<i class="fa fa-star" style="font-size:24px"></i>&nbsp;&nbsp;Nhà Cung Cấp </td>
    <td><select name="Nhacc" required="required"  >
      <option value="">-- --</option>
      <?php
    while($dong_ncc=mysqli_fetch_array($run)){
		?>
      <option value="<?php echo $dong_ncc['MaNCC']?>">
        <?php
    echo $dong_ncc['TenNCC']?>
        </option>
      <?php
	}
	?>
    </select></td>
    </tr>
  
  <tr>
    <td>&nbsp;<i class="fa fa-picture-o" style="font-size:24px"></i>&nbsp;&nbsp;Hình Ảnh (URL)</td>
    <td><input type="text" name="HinhAnh" required="required" /></td>
  </tr>
 
 
 
  <tr>
    <td colspan="2" align="center" class="th"><br />
      <button name="them" id="them" value="Thêm" style="background-color:#CCC; font-size:24px; font-family:'Times New Roman', Times, serif">Thêm</button></td>
  </tr>
  </table>
</form>
