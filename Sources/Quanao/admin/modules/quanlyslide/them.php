
<form action="modules/quanlyslide/xuly.php" method="post" enctype="multipart/form-data" >
  <table class="table table-border" width="100%">
  <thead class="thead-dark">
  <tr>
    <th height="39" colspan="2" align="center">Thêm Slide</th>
  </tr></thead>
  <tr>
    <td width="30%">&nbsp;<i class="fa fa-picture-o" style="font-size:24px"></i>&nbsp;&nbsp;Hình ảnh(URL)</td>
    <td width="70%"><input type="text" name="Anhslide" required="required" /></td>
    </tr>
  
  <tr>
    <td>&nbsp;<i class="fa fa-tint" style="font-size:24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;Tiêu đề</td>
    <td><textarea name="Tieude" cols="40" rows="5" require="required"></textarea></td>
    </tr>
    <tr>
    <td>&nbsp;<i class="fa fa-tint" style="font-size:24px"></i>&nbsp;&nbsp;&nbsp;&nbsp;Nội dung</td>
    <td><textarea name="Noidung" cols="40" rows="10" require="required"></textarea></td>
    </tr> 
   
    <td colspan="2" align="center" class="th"><br />
      <button name="them" id="them" value="Thêm" style="background-color:#CCC; font-size:24px; font-family:'Times New Roman', Times, serif">Thêm</button></td>
  </tr>
  </table>
</form>
