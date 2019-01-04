
<?php
$sql="select * from slide";
$run=mysqli_query($cnn,$sql);
?>


<table class="table table-border" width="100%">
<thead class="thead-dark">
  <tr>
    <th colspan="6">Danh sách Slide</th>
  </tr>
  </thead>
  <thead class="thead-dark"> 
  <tr>
   <th><em><strong>Số thứ tự</strong></em></th>
    <th><em><strong>Hình Ảnh</strong></em></th>
    <th><em><strong>Tiêu đề</strong></em></th>
    <th><em><strong>Nội dung</strong></em></th>

    <th colspan="2"><em><strong>Quản lý</strong></em></th>
  </tr>
  </thead>
  <?php
  $i=1;
 while ($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
     <td height="117"><?php echo $i ?></td>
    <td><?php echo '<img src="'.$dong['Anhslide'].'" width="120" height="60">' ?></td>
    
    <td><?php echo $dong['Tieude']; ?></td>
    <td><?php echo $dong['Noidung']; ?></td>
    
    <td><a href="index.php?quanly=quanlyslide&ac=sua&id=<?php echo $dong['Maslide']?>">Sửa</td>
    <td align="center"><a href="modules/quanlyslide/xuly.php?id=<?php echo $dong['Maslide'] ?>">Xoá</a></td>
  </tr>
  <?php
$i++;
  }
  ?>
</table>

