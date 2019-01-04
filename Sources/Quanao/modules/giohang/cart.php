<?php
    include('config.php');
    mysqli_set_charset($cnn,"utf8");
    $id=$_GET['id'];
    if(isset($_GET['id'])){
        
        $sql_sp="select * from sanpham where masp='$id'";
        $result=mysqli_query($cnn,$sql_sp);
        $data= mysqli_fetch_row($result);
        
        if(!empty($_SESSION['cart'])){
            $cart=$_SESSION['cart'];
            //kiểm tra lần 2 mua hàng
            if(array_key_exists($id,$cart)){
                $cart[$id]=array(
                    "sl"=>(int)$cart[$id]["sl"]+1,
                    "DonGia"=>$data[5],
                    "tensp"=>$data[1],
                    "khuyenmai"=>$data[6],
                    "HinhAnh"=>$data[4]
                );
            }
            else{
                $cart[$id]=array(
                    "sl"=>1,
                    "DonGia"=>$data[5],
                    "tensp"=>$data[1],
                    "khuyenmai"=>$data[6],
                    "HinhAnh"=>$data[4]
                );
            }

        }
        else{
            //Lần đầu mua hàng
            $cart[$id]=array(
                "sl"=>1,
                "DonGia"=>$data[5],
                "tensp"=>$data[1],
                "khuyenmai"=>$data[6],
                "HinhAnh"=>$data[4]
            );
        }
        $_SESSION['cart']=$cart;
    } else {
        //Về trang chủ
        header("location:/index.php");
    }    
    
?>    