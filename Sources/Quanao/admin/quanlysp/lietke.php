<?php
$sql= " SELECT * FROM Loaisp order by Masp   desc";
$run=mysql_query($sql);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Loại sản phẩm</th>
      <th scope="col"></th>
    </tr>
  </thead>