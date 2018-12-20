<?php

    session_start();
    $msg = "";
    $msg="";
    if(isset($_POST['submit'])){
    $conn= new mysqli('localhost','root','','quanao');

    $email =$conn->real_escape_string($_POST['email']);
    $password =$conn->real_escape_string($_POST['password']);
    if($email== ""){
        $msg= "Bạn chưa nhập email";
    }else{
        if($password== ""){
        $msg = "Bạn chưa nhập mật khẩu";
        }else{
            $sql = $conn->query("SELECT id, password from users WHERE email='$email'");
            if($sql->num_rows > 0){
                $data = $sql->fetch_array();
                if(password_verify($password, $data['password'])){
                    $_SESSION['tentaikhoan']= $email;
                    header("location: member.php");
                    
                }else
                $msg = "Mật khẩu không đúng";
            }
        }
    }
   
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOTO Shop-Đăng Nhập</title>
    <link rel="icon" href="assets/img/logofix.png" type="img/png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
    #dk{
        color: red;
    }  
    </style>
    
</head>
<body>
<div class="container-fulid" style="margin-top: 5px;">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3" align="center">
            <a href="home.php">
            
            </a>
            <br><br>
            <?php if($msg != "") echo $msg."<br><br>" ?>
            <form method="POST" action="">
            <img src="assets/img/logo.png" width=80% >
            <br>
            <table>
               <tr> <td style="color:red;">Tài Khoản:</td><td> <input name="user" placeholder="Nhập email..." class="form-control" type="user"></td></tr>
               <tr>
                <td style="color:red;">Mật khẩu:</td> <td><input name="password" placeholder="Nhập mật khẩu..." class="form-control" type="password"></td></tr>
            </table>
            <div class="checkbox" style="color:red;">
                    <label><input type="checkbox" id="checkbox"> Remember me</label>
                </div><br>
                <input name="submit" value="Đăng Nhập" class="btn btn-primary" type="submit" id="btnLogin"><br>
                <br>
                <a href="dangky.php" id="dk">Bạn chưa có tài khoản?Đăng kí</a>
                </table>
            </form>
        </div>
    </div>
   </div>
</body>
</html>
