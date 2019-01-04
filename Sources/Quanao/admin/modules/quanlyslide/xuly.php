

<?php
     
	 $id=$_GET['id'];
	 $anhslide=$_POST['Anhslide'];
	 $Tieude=$_POST['Tieude'];
	 $Noidung=$_POST['Noidung'];
	
	
	 if(isset($_POST['them'])){
		 //them
		 $sql="insert into slide (Anhslide,Tieude,Noidung) values('$anhside','$Tieude','$Noidung')";
		 mysqli_query($cnn,$sql);
		 header('location:../../index.php?quanly=quanlyslide&ac=them');
	 }elseif(isset($_POST['sua'])){
		 //Sua
		
			$sql="update slide set Anhslide='$anhslide',Tieude='$Tieude',Noidung='$Noidung' where Maslide='$id'";
		
		mysqli_query($cnn,$sql);
		header('location:.././index.php?quanly=quanlyslide&ac=sua&id='.$id);
		//xóa
	 }else{
		 $sql="delete from slide where Maslide='$id'";
		 mysql_query($sql);
		  header('location:.././index.php?quanly=quanlyslide&ac=them');
	 }
?>
