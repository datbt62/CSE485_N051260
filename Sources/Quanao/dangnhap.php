


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
		<form action="xulilogin.php" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Đăng nhập vào trang quản lý</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
            <table cellpadding='5' cellspacing='5' text-color='black'>
                <tr>
                    <td>
                        Tên đăng nhập :
                    </td>
                    <td>
                        <input type='text' name="username" id='username' size='40'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type='password' name="password" id='password' size='40'/>
                    </td>
                </tr>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Trở về</button>
        <button type="submit" class="btn btn-btn-secondary" name="login" id="button" value="Login">Đăng Nhập</button>
      </div>
			</form>
    </div>
  </div>
</div>
<?php  


		// include('modules/connect/config.php');  
		// mysqli_set_charset($cnn,"utf8") ; 
	  //   session_start();	  
	  // if(isset($_POST['login'])){
		//   $username=$_POST['username'];
		//   $password=$_POST['password'];
		//   $sql="select * from admin where username='$username'and password='$password' limit 1";
		//   $query=mysqli_query($conn,$sql);
		//   $nums=mysqli_num_rows($query);
		//   if($nums>0){
		// 	  $row=mysqli_fetch_array($query);
			  
		// 	  $_SESSION['dangnhap']=$username;
		// 	 session_start();
		// 	  header('location:admin/index.php');
		// 	  $_SESSION['quyen_truy_cap'] = $row[quyen_truy_cap];	
		// 	  $_SESSION['hoten'] = $row[hoten];	
		// 	  $_SESSION['id'] = $row[id_user];  	  
		// 	  }else{
		//       echo"<script> alert('Tài khoản không đúng!')</script>";
		//       }		  
	  // }

?>

