<?php  


		include('modules/connect/config.php');  
		mysqli_set_charset($cnn,"utf8") ; 
	    session_start();	  
	  if(isset($_POST['login'])){
		  $username=$_POST['username'];
		  $password=$_POST['password'];
		  $sql="select * from admin where username='$username'and password='$password' limit 1";
		  $query=mysqli_query($cnn,$sql);
		  $nums=mysqli_num_rows($query);
		  if($nums>0){
			  $row=mysqli_fetch_array($query);
			  
			  $_SESSION['dangnhap']=$username;
			 session_start();
			  header('location:admin/');
			  $_SESSION['quyentruycap'] = $row['quyentruycap'];	
			  $_SESSION['hoten'] = $row['hoten'];	
			  $_SESSION['id'] = $row['id_user'];  	  
			  }else{
				header('location:index.php');
			  echo"<script> alert('Tài khoản không đúng!')</script>";
			  
		      }		  
	  }

?>
