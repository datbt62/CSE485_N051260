<?php
     $msg="";
     if(isset($_POST['submit'])){
     $conn= new mysqli('localhost','root','','quanao');
 
     $name = $conn->real_escape_string($_POST['name']);
     $email =$conn->real_escape_string($_POST['email']);
     $password =$conn->real_escape_string($_POST['password']);
     $cPassword =$conn->real_escape_string($_POST['cPassword']);
     
     if($password != $cPassword){
         $msg= "Mật khẩu không đúng";
     }else {
         # code...
         $hash = password_hash($password, PASSWORD_BCRYPT);
        $conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hash')");
        $msg="Bạn đăng kí thành công";
     }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <script src="./boostrap.min.css"></script>
    <script src="./jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="./css/style.css"/>
    <title>TOTOSHOP-Đăng kí tài khoản</title>
    <link rel="icon" href="assets/img/logofix.png" type="img/png">

</head>

<body>
   <div class="container" style="margin-top: 10px">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3" align="center">
            <a href="home.php"><img src="assets/img/logo.png" width=80%></a><br><br>
            <?php if($msg != "") echo $msg."<br><br>" ?>
            <form method="POST" action="">
                <input name="name"  placeholder="Nhập tên đăng nhập..." class="form-control" type="text"><br>
                <input name="email" placeholder="Nhập email..." class="form-control" type="email"><br>
                <input name="password" placeholder="Nhập mật khẩu..." class="form-control" type="password"><br>
                <input name="cPassword" placeholder="Nhập lại mật khẩu..." class="form-control" type="password"><br>
                <input name="submit" value="Đăng ký" class="btn btn-primary" type="submit">
            </form>
        </div>
    </div>
   </div>
</body>
</html>