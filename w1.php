<!DOCTYPE html>
<html>
<head>
    <title>Grocery Bill Calculator</title>
</head>
<body>
    <h1>Grocery Bill Calculator</h1>
    <form method="POST" action="">
        <h3>Select Grocery Items:</h3>
        <input type="checkbox" name="items[]" value="Bread"> Bread<br>
        <input type="checkbox" name="items[]" value="Milk"> Milk<br>
        <input type="checkbox" name="items[]" value="Eggs"> Eggs<br>
        <input type="checkbox" name="items[]" value="Fruits"> Fruits<br>
        <input type="checkbox" name="items[]" value="Vegetables"> Vegetables<br>

        <input type="submit" name="calculate" value="Calculate Bill">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $item_prices = [
            "Bread" => 2.50,
            "Milk" => 3.00,
            "Eggs" => 1.50,
            "Fruits" => 5.00,
            "Vegetables" => 4.00
        ];

        $total_bill = 0;

        foreach ($_POST['items'] as $selected_item) {
            if (array_key_exists($selected_item, $item_prices)) {
                $total_bill += $item_prices[$selected_item];
                echo $selected_item . ": Rs. " . $item_prices[$selected_item] . "<br>";
            }
        }

        echo "<h2>Total Bill:</h2>";
        echo "Total Bill: Rs. " . $total_bill . "<br>";
    }
    ?>
</body>
</html>
