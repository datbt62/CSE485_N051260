<?php  


		include('modules/connect/config.php');  
		mysqli_set_charset($cnn,"utf8") ; 
	    $username= isset($_POST['username']) ? $_POST['username']:"";
        $password= isset($_POST['password']) ? $_POST['password']: "";
	
		  $sql ="select username,password from admin where (username='$username')";
		  $sql .='and (password='$password') limit 1';
		  $query=mysqli_query($cnn,$sql);
		  $nums=mysqli_num_rows($query);
		  if($num=0){
			header('location:/admin'); 	  
			  }else{
		      echo"<script> alert('Tài khoản không đúng!')</script>";
		      }		  
	   

?>
