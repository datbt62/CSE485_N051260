

<?php
    
	 $id=$_GET['id'];
	 
	 $username=$_POST['username'];
	 $password=$_POST['password'];
	 $hoten=$_POST['hoten'];
	 $gioitinh=$_POST['gioitinh']; 	 
	 $email=$_POST['email'];
	 $sdt=$_POST['sdt'];;
	 $ngaysinh=$_POST['ngaysinh'];
	 $quyen=$_POST['quyen'];
	
	 if(isset($_POST['them'])){
		 //them
		 $sql="insert into admin (username,password,hoten,gioitinh,ngaysinh,email,sdt,quyentruycap)values('$username',$password','$hoten','$gioitinh','$ngaysinh','$email','$sdt',$quyen')";
		 mysqli_query($cnn,$sql);
		header('location:../../index.php?quanly=quanlytaikhoan&ac=them');
		
		
		 
	 }elseif(isset($_POST['sua'])){
		 //Sua
		
			$sql="update admin set username='$username',hoten='$hoten',gioitinh='$gioitinh',ngaysinh='$ngaysinh',email='$email',sdt='$sdt', quyentruycap ='$quyen' where id_user='$id'" ;
		    
		mysqli_query($cnn,$sql);
		
		header('location:../../index.php?quanly=quanlytaikhoan&ac=sua&id='.$id);
		//xóa
	 }else{
		 $sql="delete from admin where id_user='$id'";
		 mysqli_query($cnn,$sql);
		  header('location:../../index.php?quanly=quanlytaikhoan&ac=them');
	 }
?>
