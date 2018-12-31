<?php
include('modules/connect/config.php');
mysqli_set_charset($cnn,"utf8");
$sql_tintuc="select * from slide where Maslide = $maslide";
$kq=mysqli_query($cnn,$sql_tintuc);

if(!$kq){
  echo "Không có tin tức";
  }
while ($dong= mysqli_fetch_array($kq)) {
 ?>
 <div class="tittle" >
    <span class="border-bottom" ><h4 align=center><u>Tin tức toto shop</u> </h4></span>
  </div>
    <br>
 <div class="row">
 <h4><?php echo $dong['Tieude']?></h4>
 <br>
 <br>
 <p><?php echo $dong['Noidung']?></p>
 </div>
<?php } ?>