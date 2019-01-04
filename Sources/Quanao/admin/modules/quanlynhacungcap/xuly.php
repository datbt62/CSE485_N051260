

<?php
	 include('../connect/config.php');
	 mysqli_set_charset($cnn,"utf8");
	 $id=$_GET['id'];
	 $TenNCC=$_POST['TenNCC'];
	 $Sodt=$_POST['SDT'];
	 $Email=$_POST['Email']; 	 
	 $DiaChi=$_POST['DiaChi'];
	
	
	 if(isset($_POST['them'])){
		 //them
		 $sql="insert into nhacc (TenNCC,SDT,Email,DiaChi)values('$TenNCC','$Sodt','$Email','$DiaChi')";
		 mysqli_query($cnn,$sql);
		 header('location:../../index.php?quanly=quanlynhacungcap&ac=them');
	 }elseif(isset($_POST['sua'])){
		 //Sua
		
			$sql="update nhacc set TenNCC='$TenNCC',SDT='$Sodt',Email='$Email',DiaChi='$DiaChi' where MaNCC='$id'";
		
		mysqli_query($cnn,$sql);
		header('location:../../index.php?quanly=quanlynhacungcap&ac=sua&id='.$id);
		//xóa
	 }else{
		 $sql="delete from nhacc where MaNCC='$id'";
		 mysqli_query($cnn,$sql);
		  header('location:../../index.php?quanly=quanlynhacungcap&ac=them');
	 }
?>
