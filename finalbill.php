<html>
<body align="center">
<title>Generate Bill</title>
<?php

    echo("<h1>Customer Information</h1>");
    $name = $_POST["t1"];
    $add = $_POST["t2"];
    $phno = $_POST["t3"];
    echo("<hr>");
    echo("<h3>Customer Name: " . $name . "</h3>");
    echo("<h3>Customer Address: " . $add. "</h3>");
    echo("<h3>Customer Phone-no: " . $phno . "</h3>");

    echo("<hr>");
    error_reporting(0);
    echo("<h1>Product Information</h1>");
    $Pname = $_POST["t4"];
    $qty = $_POST["t5"];
    $rate = $_POST["t6"];
    echo("<h3>Product Name: " . $Pname . "</h3>");
    echo("<h3>Product Qty: " . $qty. "</h3>");
    echo("<h3>Product Rate: " . $rate . "</h3>");
?>
</body>
</html>
