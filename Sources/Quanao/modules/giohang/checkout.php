<?php 
   include('config.php');
   mysqli_set_charset($cnn,'utf8');
   if(isset($_POST["thanhtoan"])){
    $name=$_POST["hoten"];
    $email=$_POST["email"];
    $sdt=$_POST["sdt"];
    $duongxa=$_POST["duongxa"];
    $quanhuyen=$_POST["quanhuyen"];
    $tinh=$_POST["tinh"];
    $sql_insert="Insert into hoadon(TenKH,Email,SDT,duongxa,quanhuyen,tinh,Tongtien,NgayDatHang,TinhTrangGiaoHang,DaThanhToan) values";
    $sql_insert .='("'.$name.'","'.$email.'","'.$sdt.'","'.$quanhuyen.'","'.$tinh.'","'.$total.'","'.date('Y-m-d').'","","")';
    mysqli_query($cnn,$sql_insert);
    $last_id=mysqli_insert_id($cnn);
    foreach ($_SESSION['cart'] as $key => $value) {
        $Tong=$value['khuyenmai'].'","'.$value['DonGia']*$value['sl']*$value['khuyenmai']/100;
        $sql_cthd="insert into cthd(mahd,masp,tensp,SoLuong,DonGia,khuyenmai,Tongtien) values";
        $sql_cthd .='("'.$last_id.'","'.$key.'","'.$value['sl'].'","'.$value['DonGia'].'","'.$value['khuyenmai'].'","'.$Tong.'")';
        ysqli_query($cnn,$sql_cthd);
    }
}
?>
<div class="container">
<h4 align=center>Thanh Toán</h4>
<table class="table table-bordered">
<tr>
<thead class="thead-dark">
<td>STT</td>
<td>Ảnh</td>
<td>Tên sản phẩm</td>
<td>Đơn giá</td>
<td>Khuyến mãi</td>
<td>Số lượng</td>
<td>Thành Tiền</td>

</thead></tr>
<?php $total=0;
if(!empty($_SESSION["cart"])){
    $i=0;
    foreach ($_SESSION["cart"] as $key => $value) {
        $i++;
        # code...
    
?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo "<img src='".$_SESSION["cart"][$key]['Hinhanh']."'/>"; ?></td>
<td><?php echo $_SESSION["cart"][$key]['tensp']; ?></td>
<td><?php echo $_SESSION["cart"][$key]['DonGia']; ?></td>
<td><?php echo $_SESSION["cart"][$key]['khuyenmai']; ?></td>
<td><?php echo $_SESSION["cart"][$key]['sl'] ?>

</td>

<td><?php echo ($_SESSION["cart"][$key]['sl'])*($_SESSION["cart"][$key]['DonGia'])*($_SESSION["cart"][$key]['khuyenmai'])/100;
             $total+=($_SESSION["cart"][$key]['sl'])*($_SESSION["cart"][$key]['DonGia'])*($_SESSION["cart"][$key]['khuyenmai'])/100;
    ?></td>
    <?php } }?>
</tr>
<tr>
<td colspan="6">Tổng Tiền</td>
<td><?php echo $total;?></td>
</tr>
</table>
<h3 align=center>Thông tin thanh toán</h3>
<form action="post" role="form">
<div class="form-group">
<label for="">Họ Tên</label>
<input type="text" name="hoten" class="form-control" id="hoten" placeholder="HoTen">
</div>
<div class="form-group">
<label for="">Email</label>
<input type="text" name="email" class="form-control" id="email" placeholder="Email">
</div>
<div class="form-group">
<label for="">Số điện thoại</label>
<input type="text" name="sdt" class="form-control" id="sdt" placeholder="Số điện thoai">
</div>
<div class="form-group">
<label for="">Đường/Xã</label>
<input type="text" name="duongxa" class="form-control" id="duongxa" placeholder="Đường/Xã">
</div>
<div class="form-group">
<label for="">Quận/Huyện</label>
<input type="text" name="quanhuyen" class="form-control" id="quanhuyen" placeholder="Quận/Huyện">
<div class="form-group">
<label for="">Tỉnh</label>
<input type="text" name="tinh" class="form-control" id="tinh" placeholder="Tỉnh">
</div>
<button type="sbm" class="btn btn-success" name="thanhtoan">Thanh Toán</button>
</form>

</div>