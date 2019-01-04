





<?php
    if(isset($_GET['ac'])){
        $tam=$_GET['ac'];
    }else
    {
        $tam='';
    }if($tam=='them'){
        include('modules/quanlyslide/them.php');
    }if($tam=='sua'){
        include('modules/quanlyslide/sua.php');	
    }
    ?>

<div class="row">
    <?php
include('modules/quanlyslide/lietke.php');
?>
	
</div>
