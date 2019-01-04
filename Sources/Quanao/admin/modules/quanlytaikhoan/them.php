
<form action="modules/quanlytaikhoan/xuly.php" method="post" enctype="multipart/form-data" >
  <table class="table table-border" width="100%">
  <thead class="thead-dark">
  <tr>
    <th height="39" colspan="2" align="center">Thêm Tài Khoản</th>
  </tr>
  </thead>
  <tr>
    <td width="30%">&nbsp;<i class="fa fa-paw" style="font-size:24px"></i>&nbsp;&nbsp;Tên Tài Khoản</td>
    <td width="70%"><input type="text" name="username" required="required" /></td>
    </tr>
  
  <tr>
  <tr>
    <td width="30%">&nbsp;<i class="fa fa-paw" style="font-size:24px"></i>&nbsp;&nbsp;Mật khẩu</td>
    <td width="70%"><input type="text" name="password" required="required" /></td>
    </tr>
  
  <tr>
    <td width="30%">&nbsp;<i class="fa fa-tint" style="font-size:24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;Tên người dùng</td>
    <td width="70%"><input type="text" name="hoten" required="required" /></td>
    </tr>
    
   <tr>
     <td width="30%">&nbsp;<i class="fa fa-shopping-basket" style="font-size:24px"></i>&nbsp;&nbsp;Giới Tính</td>
     <td width="70%"><input type="text" name="gioitinh" required="required" /></td>
    </tr>
    <tr>
     <td width="30%">&nbsp;<i class="fa fa-shopping-basket" style="font-size:24px"></i>&nbsp;&nbsp;Ngày sinh (YYYY/MM/DD)</td>
     <td><input type="text" name="ngaysinh" required="required" /></td>
    </tr>
   <tr>
     <td width="30%">&nbsp;<i class="fa fa-history" style="font-size:24px"></i>&nbsp;&nbsp;Email</td>
     <td width="70%"><input type="text" name="email" required="required" /></td>
    </tr>
     <?php
  // $sql="select * from quyen";
  // $run=mysqli_query($cnn,$sql);
    
  ?>
  
   <tr>
    <td width="30%">&nbsp;<i class="fa fa-star" style="font-size:24px"></i>&nbsp;&nbsp;Quyền truy cập </td>
    <td width="70%"><input type="text" name="quyen" required="required" /><p>1.Admin ,2.Nhân Viên</p></td>
    </tr>
    <!-- <td width="70%"><select name="quyen" required="required" >
      <option value="">-- --</option>
      <?php
    //while($dong_quyen=mysqli_fetch_array($run)){
		?>
      <option value="<?php// echo $dong_quyen['quyentruycap']?>">
        <?php
    //echo $dong_quyen['tenquyen']?>
        </option>
      <?php
	//}
	?>
    </select>--></td> 
     
    </tr>
    
 
 
  <tr>
    <td colspan="2" align="center" class="th"><br />
      <button name="them" id="them" value="Thêm" style="background-color:#CCC; font-size:24px; font-family:'Times New Roman', Times, serif">Thêm</button></td>
  </tr>
  </table>
</form>
