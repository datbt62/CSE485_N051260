

<?php
     include('../modules/connect/config.php');
	 $id=$_GET['id'];
	 $tinhtrang=$_POST['tinhtrang'];
	 $thanhtoan=$_POST['thanhtoan'];
	
	 
	if(isset($_POST['sua'])){
		 //Sua
		
			$sql="update hoadon set TinhTrangGiaoHang='$tinhtrang' set DaThanhToan='$thanhtoan' where  mahd ='$id'";
		
		mysqli_query($cnn,$sql);
		header('location:.././index.php?quanly=quanlydonhang&ac=sua&id='.$id);
		//xóa
	 }else{
		 $sql="delete from sanpham where mahd='$id'";
		 mysql_query($sql);
		  header('location:.././index.php?quanly=quanlydonhang');
	 }
?>
