





<?php
    $tam=isset($_GET["ac"])?$_GET["ac"]:"";
    if($tam=='sua'){
        include('modules/quanlydonhang/sua.php');	
    }
    ?>
<div class="container">
    <?php
    
    include('modules/quanlydonhang/lietke.php');
    ?>
	
</div>
