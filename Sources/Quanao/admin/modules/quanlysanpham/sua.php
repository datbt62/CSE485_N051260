
<?php
     $sql="select * from sanpham where masp='$_GET[id]'";
	 $run=mysqli_query($cnn,$sql);
	 $dong= mysqli_fetch_array($run);
?>
<style>
th{
	background:#666	
	}
</style>

<form action="modules/quanlysanpham/xuly.php?id=<?php echo $dong['masp']?>" method="post" enctype="multipart/form-data">
<table class="table" width="100%" border="1">
<thead class="thead-dark">
  <tr>
    <th colspan="2"><div align="center">Sửa Chi Tiết Sản Phẩm</div></th>
  </tr>
  </thead>
  <tr>
    <td>Tên Sản Phẩm</td>
    <td><input type="text" name="Tensp" value="<?php echo $dong['tensp']?>"></td>
  </tr>
  
    <td>Khuyến mãi</td>
    <td><input type="text" name="Khuyenmai" value="<?php echo $dong['khuyenmai']?>"></td>
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
    <td><select name="loaisp">
    <?php
    while($dong_loaisp=mysqli_fetch_array($run_loaisp)){
		if($dong['maloaisp']==$dong_loaisp['maloaisp']){
		?>
    <option selected="selected" value="<?php echo $dong_loaisp['maloaisp']?>"><?php
    echo $dong_loaisp['tenloaisp']?> </option>
    <?php
	}else{
	?>
    <option value="<?php echo $dong_loaisp['maloaisp']?>"><?php
    echo $dong_loaisp['tenloaisp']?> </option>
    <?php
	}
	}
	?>
    </select></td>
  </tr>
   
  
  <?php
  $sql_nhacc="select * from nhacc";
  $run_nhacc=mysqli_query($cnn,$sql_nhacc);
  ?>
  <tr>
    <td>Nhà Cung Cấp</td>
    <td><select name="nhacc">
    <?php
    while($dong_nhacc=mysqli_fetch_array($run_nhacc)){
		if($dong['MaNCC']==$dong_nhacc['MaNCC']){
		?>
    <option selected="selected" value="<?php echo $dong_nhacc['MaNCC']?>"><?php
    echo $dong_nhacc['TenNCC']?> </option>
    <?php
	}else{
	?>
    <option value="<?php echo $dong_nhacc['MaNCC']?>"><?php
    echo $dong_nhacc['TenNCC']?> </option>
    <?php
	}
	}
	?>
    </select></td>
  </tr>
  <tr>
    <td colspan="2"> <div align="center">
      <button name="sua" value="Sửa" style="background-color:#CCC; font-size:24px; font-family:'Times New Roman', Times, serif">Sửa</button>
      </div>
      </td>
  </tr>
</table>
</form>
