<!DOCTYPE html>
<?php
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>查看订单的员工界面</title>
</head>
<body>
  <h1>Bob's Auto Parts</h1>
  <h2>Customer Orders</h2>
  <?php
  //  rb 以只读模式打开文件
  @$fp=fopen("$DOCUMENT_ROOT/orderSys/orders.txt",'rb');
  if(!$fp){
    echo "<p><b>No orders pending. Please try again later.</b></p>";
    exit;
  }
  // feof 如果参数文件指针指向了文件末尾，则返回true file end of file
  while(!feof($fp)){
    $order=fgets($fp,999);
    echo $order."<br>";
  }
  ?>
</body>
</html>