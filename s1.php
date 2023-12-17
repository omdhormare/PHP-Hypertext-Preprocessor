<?php
// List of grocery items
$groceryItems = array(
    'Apple' => 2.5,
    'Banana' => 1.75,
    'Milk' => 3.0,
    'Bread' => 2.25,
    'Eggs' => 4.5
);

// Function to calculate the total bill
function calculateBill($selectedItems) {
    global $groceryItems;

    $totalBill = 0;
    foreach ($selectedItems as $item) {
        if (isset($groceryItems[$item])) {
            $totalBill += $groceryItems[$item];
        }
    }

    return $totalBill;
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get the selected grocery items
    $selectedItems = $_POST['items'];

    // Calculate the total bill
    $totalBill = calculateBill($selectedItems);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grocery Bill</title>
</head>
<body>
    <h2>Grocery Items</h2>
    <form method="POST" action="<?php echo $_SERVER['s1.php']; ?>">
        <?php
        // Display the list of grocery items with checkboxes
        foreach ($groceryItems as $item => $price) {
            echo '<input type="checkbox" name="items[]" value="' . $item . '"> ' . $item . ' ($' . $price . ')<br>';
        }
        ?>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Display the total bill if the form is submitted
    if (isset($totalBill)) {
        echo '<h3>Total Bill: $' . $totalBill . '</h3>';
    }
    ?>
</body>
</html>
