<div class="row">
<div class="col-md-2 col-lg-2"></div>
<div class="col-md-8 col-lg-8">
<?php
include('modules/connect/config.php');
mysqli_set_charset($cnn,"utf8");
$maslide=isset($_GET['id']);
$sql_slide="select * from slide where maslide='$maslide'";
$result=mysqli_query($cnn,$sql_slide);
while($row = mysqli_fetch_array($result)){
        echo '<h2>'.$row['Tieude'].'</h2>';
        
         echo '<p>'.$row['Noidung'].'</p>';
     } 
mysqli_close($cnn);
?>
</div>
<div class="col-md-2 col-lg-2"></div>
</div>