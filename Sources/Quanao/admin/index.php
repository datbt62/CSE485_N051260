<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý Web Shop</title>
    <link rel="icon" href="assets/img/logofix.png" type="img/png">    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">      
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    
    
</head>
<body>
<?php 
     session_start();
    if(isset($_SESSION['dangnhap']) && $_SESSION['quyentruycap'] == 2){
		
?>
<div class="wrapper">
<?php
            include('modules/connect/config.php');
             mysqli_set_charset($cnn,"utf8") ; 
			 include('modules/header.php');
			include('modules/menunhanvien.php');
			 include('modules/contentnhanvien.php');
			 include('modules/footer.php');

 ?>   
 </div>
 <?php
    }else
    if(isset($_SESSION['dangnhap']) && $_SESSION['quyentruycap'] == 1){
		?>
        <div class="wrapper">
        <?php
            include('modules/connect/config.php');
            mysqli_set_charset($cnn,"utf8") ; 
			include('modules/header.php');
			include('modules/menuadmin.php');
			include('modules/contentadmin.php');
			include('modules/footer.php');

 ?> 
        </div>
    <?php } ?>
 <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
 <link rel="stylesheet" href="assets/css/styles.css">   
<script src="assets/js/jquery.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
</body>
</html>