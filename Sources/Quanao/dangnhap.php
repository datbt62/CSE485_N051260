


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Đăng nhập vào trang quản lý</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
            <table cellpadding='5' cellspacing='5' text-color='black'>
                <tr>
                    <td>
                        Tên đăng nhập :
                    </td>
                    <td>
                        <input type='text' name='username' id='username' size='40'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type='password' name='password' id='password' size='40'/>
                    </td>
                </tr>
            </table>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Trở về</button>
        <button type="submit" class="btn btn-primary" ><a href="xulilogin.php">Đăng Nhập</a></button>
      </div>
    </div>
  </div>
</div>
<!-- <script type="text/javascript">
	function Login(){
		var username=$('#username').val();
		var password= $('#password').val();
		$.ajax({
			url: "xulilogin.php",
			type: 'post',
			dataType: 'json',
			data: {username: username, password: password},
			success: function(result){
				if(result==1){
					$('#head-signup').hide();
					$('#logout').html("<button id='logout' onclick='Logout()' class='btn btn-danger';> Đăng xuất</button>");
					$('#head-login').hide();
					$('#formLogin').modal('hide');
					$('#Name').html("Xin chào "+username+"!");
				}						
				else{
					$('#validate').html("Sai tài khoản hoặc mật khẩu");
					$('#formlogin').modal('show');
				}
			}
		});
    }
    function Logout(){
		$('#head-login').show();
		$('#head-signup').show();
		$('#logout').hide();
		$('#Name').hide();
	}
</script> -->


