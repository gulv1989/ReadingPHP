<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>订单列表</title>
</head>
<body>
  <h1>Bob's Auto Parts</h1>
  <h2>Order Results</h2>
  <?php
  $tireqty = $_POST['tireqty'];
  $oilqty = $_POST['oilqty'];
  $sparkqty = $_POST['sparkqty'];
  echo '<p>Order processed at:'.date('H:i,jS F Y').'</p>';
  echo '<p>Your order is as follows:</p>';
  echo $tireqty.' tires<br>';
  echo $oilqty.' bottles of oil<br>';
  echo $sparkqty.' spark plugs<br>';

  $totalqty =0;
  $totalqty = $tireqty+$oilqty+$sparkqty;
  if($totalqty==0){
    echo '<p style="color:red">You did not order anything on the previous page!</p>';
  }else{
    echo 'Items ordered: '.$totalqty.'<br>';
    $totalamount = 0.00;
    define('TIREPRICE',100);
    define('OILPRICE',10);
    define('SPARKPRICE',4);
    $totalamount=$tireqty*TIREPRICE+$oilqty*OILPRICE+$sparkqty*SPARKPRICE;
    echo "Subtotal:$".number_format($totalamount,2)."<br>";
    $taxrate = 0.10;
    $totalamount=$totalamount*(1+$taxrate);
    echo "Total including taxt:$".number_format($totalamount,2)."<br>";
  }
  ?>
</body>
</html>