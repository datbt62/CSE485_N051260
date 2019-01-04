<?php 
include('config.php');
mysqli_set_charset($cnn,"utf8");
if(isset($_GET["id"]) && isset($_GET["sl"] )){
    
    $sql_sp=" select * from sanpham where masp = ".$_GET["id"];
    $result=mysqli_query($cnn,$sql_sp);
    $data= mysqli_fetch_row($result);
    if($_GET['sl']>0){
    $_SESSION['cart'][$_GET["id"]]=array(
    "sl"->$_GET["sl"],
    "DonGia"->$data[5],
    "tensp"->$data[1],
    "khuyenmai"->$data[6],
    "HinhAnh"->$data[4]
    );
   }else{
    unset($_SESSION['cart'][$_GET["action"]]);
   }
};
   if(isset($_GET["id"]) && isset($_GET["sl"] )){unset($_SESSION['cart'][$_GET["action"]]);}
?>
<div class="container">

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
</thead>
</tr>
<?php $total=0;
if(!empty($_SESSION["cart"])){
    $i=0;
    foreach ($_SESSION["cart"] as $key => $value) {
        $i++;    
?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo "<img src=".$_SESSION["cart"][$key]['HinhAnh']." width=60 height=60/>"; ?></td>
<td><?php echo $_SESSION["cart"][$key]['tensp']; ?></td>
<td><?php echo $_SESSION["cart"][$key]['DonGia']; ?></td>
<td><?php echo $_SESSION["cart"][$key]['khuyenmai']; ?></td>
<td><input type="text" name="sl_<?php echo $key?>" id="sl_<?php echo $key?>" value="<?php echo $_SESSION["cart"][$key]['sl'] ?>">
<a href="javascript:void(0)" onclick="updateItem(<?php echo $key?>)">Update</a>
<a href="javascript:void(0)" onclick="deleteItem(<?php echo $key?>)">Delete</a>
</td>

<td><?php echo ($_SESSION["cart"][$key]['sl'])*($_SESSION["cart"][$key]['DonGia'])*($_SESSION["cart"][$key]['khuyenmai'])/100;
             $total+=($_SESSION["cart"][$key]['sl'])*($_SESSION["cart"][$key]['DonGia'])*($_SESSION["cart"][$key]['khuyenmai'])/100;?></td>

</tr>
<?php }}?>  
<tr>
<td colspan="6">Tổng Tiền</td>
<td><?php echo $total;?></td>
</tr>
<tr><td colspan="7">
<a href="index.php?page=checkout">Thanh toán</a>
</td></tr>

</table>

<script>
function updateItem(id){
    sl=$("#sl_"+id).val();
    $.get("index.php?page=listcart&id="+id+"&sl="+sl,function(data){
        location.reload();
    });
}
function deleteItem(id){
    $.get("index.php?page=listcart&id="+id+"&action=del",function(data){
        location.reload();
    });
}
</script>

</div>