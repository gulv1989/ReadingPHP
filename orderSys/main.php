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
  $find = $_POST['find'];
  echo '<p>Order processed at:'.date('H:i,jS F Y').'</p>';
 

  $totalqty =0;
  $totalqty = $tireqty+$oilqty+$sparkqty;

  switch($find){
    case "a":
      echo "<p>Regular customers.</p>";
      break;
    case "b":
      echo "<p>Customers referred by TV advert.</p>";
      break;
    case "c":
      echo "<p>Customer referred by phone directory.</p>";
      break;
    case "d":
      echo "<p>Customer referred by word of mouth.</p>";
      break;
    default:
      echo "<p>We do not konw how this customer found us.</p>";
      break;
  }


  if($totalqty==0){
    echo '<p style="color:red">You did not order anything on the previous page!</p>';
  }else{
    echo '<p>Your order is as follows:</p>';
    echo $tireqty.' tires<br>';
    echo $oilqty.' bottles of oil<br>';
    echo $sparkqty.' spark plugs<br>';
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