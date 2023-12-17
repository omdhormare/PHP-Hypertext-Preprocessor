<html>
<head>
    <title>Bill</title>
</head>
<body>
    <h1>Customer Bill</h1>
    <?php
    $customer_name = $_POST['customer_name'];
    $customer_address = $_POST['customer_address'];
    $phone_number = $_POST['phone_number'];

    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $rate = $_POST['rate'];

    echo "<h2>Customer Information:</h2>";
    echo "Name: $customer_name<br>";
    echo "Address: $customer_address<br>";
    echo "Phone Number: $phone_number<br>";

    echo "<h2>Product Information:</h2>";
    echo "Product Name: $product_name<br>";
    echo "Quantity: $quantity<br>";
    echo "Rate: $rate<br>";

    $total = $quantity * $rate;
    echo "<h2>Total Amount: $total</h2>";
    ?>
</body>
</html>
