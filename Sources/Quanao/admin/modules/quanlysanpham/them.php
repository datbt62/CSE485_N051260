
<form action="modules/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data" >
  <table width="100%" class="table table-border">
  <tr>
    <thead class=thead-dark><th height="39" colspan="2" align="center">Thêm Sản Phẩm</th></thead>
  </tr>
  
  <tr>
  <tr>
    <td width="30%">&nbsp;<i class="fa fa-paw" style="font-size:24px"></i>&nbsp;&nbsp;Tên Sản Phẩm</td>
    <td width="70%"><input type="text" name="tensp" required="required" /></td>
    </tr>
  
  <tr>
    <td>&nbsp;<i class="fa fa-tint" style="font-size:24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;Đơn Giá</td>
    <td><input type="text" name="DonGia" required="required" /></td>
    </tr>
    
   <tr>
     <td height="37">&nbsp;<i class="fa fa-shopping-basket" style="font-size:24px"></i>&nbsp;&nbsp;Khuyến mãi</td>
     <td><input type="text" name="khuyenmai" required="required" /></td>
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
  <td>Loại Sản Phẩm</td>
    
    <td>
    
    <input type="text" name="maloaisp" required="required">
    <?php
    while($dong_loaisp=mysqli_fetch_array($run)){
		echo '<p>'.$dong_loaisp['maloaisp'].'.'.$dong_loaisp['tenloaisp'].'<p>';
	
	}
	?>
    </td>
  </tr>
   
  
  <?php
  $sql_nhacc="select * from nhacc";
  $run_ncc=mysqli_query($cnn,$sql_nhacc);
  ?>
  <tr>
    <td>Nhà Cung Cấp</td>
    
    <td>
    
    <input type="text" name="nhacc" required="required">
    <?php
    while($dong_ncc=mysqli_fetch_array($run_ncc)){
		echo '<p>'.$dong_ncc['MaNCC'].'.'.$dong_ncc['TenNCC'].'<p>';
	
	}
	?>
    </td>
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
