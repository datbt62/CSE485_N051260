
<?php
  
  $sql="select * from sanpham where masp='$_GET[id]'";
	 $run=mysqli_query($cnn,$sql);
	 $dong= mysqli_fetch_array($run);
?>


<form action="modules/quanlysanpham/xuly.php?id=<?php echo $dong['masp']?>" method="post" enctype="multipart/form-data">
<table class="table table-border" width="100%">
<thead class="thead-dark">
  <tr>
    <th colspan="2"><div align="center">Sửa Chi Tiết Sản Phẩm</div></th>
  </tr>
  </thead>
  <tr>
    <td>Tên Sản Phẩm</td>
    <td><input type="text" name="tensp" value="<?php echo $dong['tensp']?>"></td>
  </tr>
  
    <td>Khuyến mãi</td>
    <td><input type="text" name="khuyenmai" value="<?php echo $dong['khuyenmai']?>"></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td><input type="text" name="DonGia" value="<?php echo $dong['DonGia']?>"></td>
  </tr>
   <tr>
    <td>Số Lượng Tồn</td>
    <td><input type="text" name="SoLuongTon" value="<?php echo $dong['SoLuongTon']?>"></td>
  </tr>
   <tr>
     <td>Hình Ảnh (URL)</td>
     <td><input type="text" name="HinhAnh" value="<?php echo $dong['HinhAnh']?>" ></td>
   </tr>
  
  <?php
  $sql_loaisp="select * from loaisp";
  $run_loaisp=mysqli_query($cnn,$sql_loaisp);
    
  ?>
  <tr>
    <td>Loại Sản Phẩm</td>
    
    <td>
    
    <input type="text" name="maloaisp" value="<?php echo $dong['maloaisp']?>">
    <?php
    while($dong_loaisp=mysqli_fetch_array($run_loaisp)){
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
    
    <input type="text" name="nhacc" value="<?php echo $dong['Mancc']?>">
    <?php
    while($dong_ncc=mysqli_fetch_array($run_ncc)){
		echo '<p>'.$dong_ncc['MaNCC'].'.'.$dong_ncc['TenNCC'].'<p>';
	
	}
	?>
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
