<div class="content">

      <div class="col-md-3 col-lg-2">
           <?PHP
		         include('modules/left/menuadmin.php');
		   ?>
          
                
      </div>
      
      <div class="col-md-8 col-lg-8">
           <?PHP
		         if(isset($_GET['xem'])){
					 $tam=$_GET['xem'];
				 }else{
				     $tam='';
				 }if($tam=='chitietsp'){
						 include('modules/right/chitietsp.php');			 
				 }elseif($tam=='alluser'){
						 include('modules/right/alluser.php');
				 }elseif($tam=='userinfo'){
						include('modules/right/userinfo.php');			 
				 }else
					     include('modules/right/tatcasp.php');
				
		   ?>
            
      </div>
	  <div class="col-md-1 col-lg-2"></div>
        
     </div>    
     <div class="clear"></div>