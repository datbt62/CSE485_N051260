





<?php
    if(isset($_GET['ac'])){
        $tam=$_GET['ac'];
    }else
    {
        $tam='';
    }if($tam=='them'){
        include('modules/quanlysanpham/them.php');
    }if($tam=='sua'){
        include('modules/quanlysanpham/sua.php');	
    }
    ?>

<div class="row">
    <?php
include('modules/quanlysanpham/lietke.php');
?>
	
</div>
