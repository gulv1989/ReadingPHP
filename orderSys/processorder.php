<!DOCTYPE html>
<?php
    // 短变量名
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    $address = $_POST['address'];
    $DOCUMENT_ROOT=$_SERVER['DOCUMENT_ROOT'];
    $date=date('H:i,jS F Y');
?>
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


  echo '<p>Order processed at:'.$date.'</p>';
  echo '<p>Your order is as follows:</p>';

  $totalqty =0;
  $totalqty = $tireqty+$oilqty+$sparkqty;

  echo 'Items ordered: '.$totalqty.'<br>';

  if($totalqty==0){
    echo '<p style="color:red">You did not order anything on the previous page!</p>';
  }else{
    if($tireqty>0){

      echo $tireqty.' tires<br>';
    }
    if($oilqty>0){

      echo $oilqty.' bottles of oil<br>';
    }
    if($sparkqty > 0){

      echo $sparkqty.' spark plugs<br>';
    }
  }
    $totalamount = 0.00;
    define('TIREPRICE',100);
    define('OILPRICE',10);
    define('SPARKPRICE',4);
    $totalamount=$tireqty*TIREPRICE+$oilqty*OILPRICE+$sparkqty*SPARKPRICE;
    $totalamount = number_format($totalamount,2,".",'');
    echo "<p>Total of order is $".$totalamount."</p>";

    echo "<p>Address to ship to is ".$address."</p>";

    $outputstring=$date."\t".$tireqty."tires\t".$oilqty."oil\t".$sparkqty."spark plugs\t\$".$totalamount."\t".$address."\n";

    // open file for appending
    @$fp = fopen("$DOCUMENT_ROOT/orderSys/orders.txt",'ab');
    flock($fp,LOCK_EX);

    if(!$fp){
      echo "<p><b>Your order could not be processed at this time. Please try again later.</b></p><body></html>";
      exit;
    }
    fwrite($fp,$outputstring,strlen($outputstring));
    flock($fp,LOCK_UN);
    fclose($fp);
    echo "<p>Order Written.</p>";


    // $taxrate = 0.10;
    // $totalamount=$totalamount*(1+$taxrate);
    // echo "Total including taxt:$".number_format($totalamount,2)."<br>";
  
  ?>
</body>
</html>