<?php 
$sql ='select duongxa,quanhuyen,tinh from khachhang';
$run=mysqli_query($cnn,$sql);
$dong= mysqli_fetch_array($run);
?>
<div class="loc container">
<form action="" method="post">
<table>
<td>Đường/Xã</td>
<td>
<input type="text" name="duongxa">
</td>
<td>Quận/Huyện</td>
<td><input type="text" name="quanhuyen"></td>

<td>Tỉnh/Thành Phố</td>
<td><input type="text" name="tinh"></td>
<td><button class="loc btn btn-warnning">Lọc</button></td>
</table>
</form>
</div>

