<div class="contentadmin">
<div class="container">
        <?PHP
		include('connect/config.php');
		    $quanly=isset($_GET["quanly"])?$_GET["quanly"]:"";
		    if($quanly=='quanlysanpham'){
				include('quanlysanpham/main.php');			 
			}
			else 
			if($quanly=='quanlydonhang'){
				include('quanlydonhang/main.php');		 
			}
			else 
			if($quanly=='quanlykhachhang'){
				include('quanlydonhang/main.php');				 
			}
			else 
			if($quanly=='quanlynhacungcap'){
				include('quanlynhacungcap/main.php');				 
			}
			else 
			if($quanly=='quanlyslide'){
				include('quanlyslide/main.php');				 
			}
		?>
	</div>
</div>