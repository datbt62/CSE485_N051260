
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
            <a href="index.php"><img src="assets/img/logo.png" width=80%></a><br><br>
            
            <form action="xuli.php" method="POST">
            <table cellpadding="5px" cellspacing="0" >
                <tr>
                    <td>
                        Tên đăng nhập : 
                    </td>
                    <td>
                        <input type="text" name="txtUsername" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type="password" name="txtPassword" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Email :
                    </td>
                    <td>
                        <input type="text" name="txtEmail" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Họ và tên :
                    </td>
                    <td>
                        <input type="text" name="txtFullname" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Ngày sinh :[YYYY/MM/DD]
                    </td>
                    <td>
                        <input type="text" name="txtBirthday" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Giới tính :
                    </td>
                    <td>
                        <select name="txtSex">
                            <option value=""></option>
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Địa chỉ:
                    </td>
                    <td>
                        <input type="text" name="txtDiaChi" size="50" />
                    </td>
                </tr>
            </table>
            <input type="submit" value="Đăng ký" />
            <input type="reset" value="Nhập lại" />
        </form>
        </div>
    </div>
   </div>
</body>
</html>