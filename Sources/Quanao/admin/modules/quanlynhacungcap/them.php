<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
th{
	background:#666;	
	}
	table{ font-size:18px;
 

	
	
}
	
</style>
<form action="modules/quanlynhacungcap/xuly.php" method="post" enctype="multipart/form-data" >
  <table width="100%" border="1">
  <tr>
    <th height="39" colspan="2" align="center">Thêm Nhà Cung Cấp</th>
  </tr>
  <tr>
    <td width="30%">&nbsp;<i class="fa fa-id-card-o" style="font-size:24px"></i>&nbsp;&nbsp;Tên Nhà Cung Cấp</td>
    <td width="70%"><input type="text" name="TenNCC" required="required" size="30" /></td>
    </tr>
  
  <tr>
    <td>&nbsp;<i class="fa fa-mobile" style="font-size:24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;Số Điện Thoại</td>
    <td><input type="text" name="SDT" required="required" size="30" /></td>
    </tr>
    
   <tr>
     <td height="37">&nbsp;<i class="fa fa-cc" style="font-size:24px"></i>&nbsp;&nbsp;Email</td>
     <td><input type="text" name="Email" required="required" size="70"/></td>
    </tr>
   
   <tr>
     <td>&nbsp;<i class="fa fa-address-book-o" style="font-size:24px"></i>&nbsp;&nbsp;Địa Chỉ</td>
     <td><input type="text" name="DiaChi" required="required" size="70" /></td>
    </tr>
  <tr>
    <td colspan="2" align="center" class="th"><br />
      <button name="them" id="them" value="Thêm" style="background-color:#CCC; font-size:24px; font-family:'Times New Roman', Times, serif">Thêm</button></td>
  </tr>
  </table>
</form>
