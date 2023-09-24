<html>
<body align="center">
<title>Generate Bill</title>
<?php

    echo("<h2>Customer Information</h2>");
    $name = $_POST["t1"];
    $add = $_POST["t2"];
    $phno = $_POST["t3"];
    echo("<hr>");
    echo("<h4>Customer Name: " . $name . "</h4>");
    echo("<h4>Customer Address: " . $add. "</h4>");
    echo("<h4>Customer Phone-no: " . $phno . "</h4>");

    echo("<hr>");
    error_reporting(0);
    echo("<h2>Product Information</h2>");
    $Pname = $_POST["t4"];
    $qty = $_POST["t5"];
    $rate = $_POST["t6"];
    echo("<h4>Product Name: " . $Pname . "</h4>");
    echo("<h4>Product Qty: " . $qty. "</h4>");
    echo("<h4>product Rate :" . $rate . "</h4>");
   echo("<hr>");
  $bill=$qty*$rate;
  echo("<h2>Customer Bill :".$bill);
  echo("<hr>");
?>
</body>
</html>
