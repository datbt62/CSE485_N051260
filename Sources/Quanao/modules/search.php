<?php 
    include('modules/connect/config.php');
    mysqli_set_charset($cnn,"utf8");
	if(trim($_GET['search'])!=""){ 
		$m=explode(" ",$_GET['search']);    
		$chuoi_tim_sql="";
		for($i=0;$i<count($m);$i++)
		{
			$tu=trim($m[$i]);
			if($tu!="")
			{
				$chuoi_tim_sql=$chuoi_tim_sql." tensp like '%".$tu."%' or";
			}
		}

		$m_2=explode(" ",$chuoi_tim_sql);    
		$chuoi_tim_sql_2="";
		for($i=0;$i<count($m_2)-1;$i++)
		{
			$chuoi_tim_sql_2=$chuoi_tim_sql_2.$m_2[$i]." ";
		} 

		$so_du_lieu=15;
		$tv="select count(*) from sanpham  where $chuoi_tim_sql_2";
		$tv_1=mysqli_query($cnn,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		$so_trang=ceil($tv_2[0]/$so_du_lieu);
		
		if(!isset($_GET['trang'])){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;}
		
		$tv="select masp,tensp,DonGia,HinhAnh,khuyenmai,tenloaisp from sanpham,loaisp where (sanpham.maloaisp=loaisp.maloaisp) and $chuoi_tim_sql_2 order by masp desc limit $vtbd,$so_du_lieu";

		$tv_1=mysqli_query($cnn,$tv);