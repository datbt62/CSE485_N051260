

<?php
     include('../connect/config.php');
	 mysqli_set_charset($cnn,"utf8");
	 $id=$_GET['id'];
	 $TenSp=$_POST['tensp'];
	 $maloaisp=$_POST['maloaisp'];
	 $nhacc=$_POST['nhacc'];
	 $HinhAnh=$_POST['HinhAnh']; 	 
	 $DonGia=$_POST['DonGia'];
	 $khuyenmai=$_POST['khuyenmai'];;
	 $SoLuongTon=$_POST['SoLuongTon'];
	
	 if(isset($_POST['them'])){
		 //them
		 $sql="insert into sanpham (tensp,maloaisp,Mancc,HinhAnh,DonGia,khuyenmai,SoLuongTon)values(,$TenSp','$maloaisp','$nhacc','$HinhAnh','$DonGia','$khuyenmai',$SoLuongTon')";
		 mysqli_query($cnn,$sql);
		header('location:../../index.php?quanly=quanlysanpham&ac=them');
		
		
		 
	 }elseif(isset($_POST['sua'])){
		 //Sua
		
			$sql="update sanpham set tensp='$TenSp',Mancc='$nhacc',HinhAnh='$HinhAnh',DonGia='$DonGia',khuyenmai='$khuyenmai',SoLuongTon='$SoLuongTon', maloaisp ='$maloaisp' where masp='$id'" ;
		    
		mysqli_query($cnn,$sql);
		
		header('location:../../index.php?quanly=quanlysanpham&ac=sua&id='.$id);
		//xóa
	 }else{
		 echo "lỗi ko thêm đc";
	    // $sql="delete from sanpham where masp='$id'";
		// mysqli_query($cnn,$sql);
		// header('location:../../index.php?quanly=quanlysanpham&ac=them');
	 }
?>
