<!DOCTYPE html>
<html>
<body align="center">
<title>Generate Bill</title>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo("<h1>Customer Information</h1>");
    $name = $_POST["t1"];
    $add = $_POST["t2"];
    $phno = $_POST["t3"];
    echo("<hr>");
    echo("<h3>Customer Name: " . $name . "</h3>");
    
    // You can add the product information here as needed
}
?>
</body>
</html>
