
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="./boostrap.min.css"></script>
    <script src="./jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="./css/style.css" />
    <title>TOTOSHOP-thông tin</title>
    <link rel="icon" href="assets/img/logofix.png" type="img/png">

</head>

<body>
<form method ="post" action = "ketnoi.php">
    <div class="container" style="margin-top: 10px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
                <a href="index.php"><img src="logo.png" width=80%></a><br><br>
                <form method="POST" action="">
                    <div class="row">
                        <div class="col-md-4">
                            <label>*Họ Tên :</label>
                        </div>
                        <div class="col-md-8">
                            <input name="name" placeholder="Nhập Họ Tên..." class="form-control" type="text"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>*Email:</label>
                        </div>
                        <div class="col-md-8">
                            <input name="email" placeholder="Nhập email..." class="form-control" type="email"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>*Số Điện Thoại:</label>
                        </div>
                        <div class="col-md-8">
                            <input name="sdt" placeholder="Nhập số điện thoai..." class="form-control" type="text"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>*Địa Chỉ:</label>
                        </div>
                        <div class="col-md-8">
                            <input name="diachi" placeholder="Địa Chỉ..." class="form-control" type="text"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>*Thời Gian có thể nhận hàng</label>
                        </div>
                        <div class="col-md-8">
                            <input name="time" placeholder="Thời Gian giao Hàng..." class="form-control" type="text"><br>
                        </div>
                    </div>
                    <input name="submit" value="Xác nhận" class="btn btn-primary" type="submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>