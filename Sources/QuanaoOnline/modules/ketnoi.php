<?php
    $id = filter_input(INPUT_POST , 'id');
    $hoten = filter_input(INPUT_POST , 'name');
    $sdt = filter_input(INPUT_POST , 'sdt');
    $email = filter_input(INPUT_POST, 'email');
    $diachi = filter_input(INPUT_POST,'diachi');
    $time =  filter_input(INPUT_POST,'time');
    
    if(!empty($hoten)){
    if(!empty($sdt)){
        // connect database
        $conn = mysqli_connect('localhost','root','','db') or die('không thể kết nối');
        mysqli_set_charset($conn,"utf8");
        if(!$conn){
            die('connect falied' .mysqli_connect_error());
        }else{
            $sql = "INSERT INTO thongtin(id,hoten,sdt,email,diachi,time) values ('$id','$hoten','$sdt','$email','$diachi','$time')";
            if($conn->query($sql)){
                echo('Bạn đã đặt hàng thành công');
            }
            else {
                echo('error'.$sql.'<br>'.$conn->error);
            }
            $conn->close();
        }

    }else {
        echo('pass empty');
        die();
    }

    }
    else {
        echo('empty name');
        die();
    }
?>
