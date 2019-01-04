
<?php
     $sql="select * from slide where Maslide='$_GET[id]'";
	 $run=mysqli_query($cnn,$sql);
	 $dong= mysqli_fetch_array($run);
?>

<form action="modules/quanlyslide/xuly.php?id=<?php echo $dong['Maslide']?>" method="post" enctype="multipart/form-data">
<table class="table table-border" width="100%">
<thead class="thead-dark">
  <tr>
    <th colspan="2"><div align="center">Sửa Slide</div></th>
  </tr>
  </thead>
   <tr>
     <td>Hình Ảnh (URL)</td>
     <td><input type="text" name="Anhslide" value="<?php echo $dong['Anhslide']?>" ></td>
   </tr>
     <tr>
     <td>Tiêu đề</td>
     <td><input type="text" name="Tieude" value="<?php echo $dong['Tieude']?>">
     </td>
     </tr>
     <tr>
     <td>Nội dung</td>
     <td><input type="text" name="Noidung" value="<?php echo $dong['Noidung']?>"></td>
     </tr>
  
    <td colspan="2"> <div align="center">
      <button name="sua" value="Sửa" style="background-color:#CCC; font-size:24px; font-family:'Times New Roman', Times, serif">Sửa</button>
      </div>
      </td>
  </tr>
</table>
</form>
