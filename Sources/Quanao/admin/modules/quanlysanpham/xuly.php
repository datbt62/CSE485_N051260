

<?php
     include('../modules/connect/config.php');
	 $id=$_GET['id'];
	 $TenSp=$_POST['TenSP'];
	 $loaisp=$_POST['loaisp'];
	 $nhacc=$_POST['nhacc'];
	 $HinhAnh=$_POST['HinhAnh']; 	 
	 $DonGia=$_POST['DonGia'];
	 $khuyenmai=$_POST['khuyenmai'];;
	 $SoLuongTon=$_POST['SoLuongTon'];
	
	 if(isset($_POST['them'])){
		 //them
		 $sql="insert into sanpham (tensp,maloaisp,Mancc,HinhAnh,DonGia,khuyenmai,SoLuongTon)values('$TenSp','$loaisp','$nhacc','$HinhAnh','$DonGia','$khuyenmai',$SoLuongTon')";
		 mysqli_query($cnn,$sql);
		 header('location:../../index.php?quanly=quanlysanpham&ac=them');
	 }elseif(isset($_POST['sua'])){
		 //Sua
		
			$sql="update sanpham set tensp='$TenSach',maloaisp='$loaisach',Mancc='$nhacc',HinhAnh='$HinhAnh',DonGia='$DonGia',khuyenmai='$khuyenmai',SoLuongTon='$SoLuongTon'where masp='$id'";
		
		mysqli_query($cnn,$sql);
		header('location:.././index.php?quanly=quanlysanpham&ac=sua&id='.$id);
		//xóa
	 }else{
		 $sql="delete from sanpham where masp='$id'";
		 mysql_query($sql);
		  header('location:.././index.php?quanly=quanlychitietsach&ac=them');
	 }
?>
