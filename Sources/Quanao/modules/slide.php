<div class="container-fulid">
<div class="simple-slider">
    
         <div class="swiper-container">
            <div class="swiper-wrapper">
<?php
include('modules/connect/config.php');
mysqli_set_charset($cnn,"utf8");
$sql_slide="select * from slide";
$kq=mysqli_query($cnn,$sql_slide);
if(!$kq){
  echo "Không có slide";
  }
while ($dong= mysqli_fetch_array($kq)) {
 ?>

                <div class="swiper-slide" >
                    <?php 
                         echo '<a href="index.php?page=slide&id='.$dong['Maslide'].'" width=100%><img src="'.$dong['Anhslide'].' "></a>';?>
                </div>               
  <?php } ?>           
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div> 
    
</div>
</div>

