<?php
$assocArray = ['a' => 5, 'b' => 10, 'c' => 3, 'd' => 8];
$choice = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $choice = isset($_POST["choice"]) ? intval($_POST["choice"]) : 0;

    switch ($choice) {
        case 1:
            foreach ($assocArray as $key => $value) {
                echo "$key: $value<br>";
            }
            break;
        case 2:
            echo "Array size: " . count($assocArray) . "<br>";
            break;
        case 3:
            $index = isset($_POST["index"]) ? intval($_POST["index"]) : -1;
            if (array_key_exists($index, $assocArray)) {
                unset($assocArray[$index]);
                echo "Element deleted.<br>";
            } else {
                echo "Index not found.<br>";
            }
            break;
        case 4:
            $flippedArray = array_flip($assocArray);
            print_r($flippedArray);
            break;
        case 5:
            shuffle($assocArray);
            foreach ($assocArray as $key => $value) {
                echo "$key: $value<br>";
            }
            break;
        case 6:
            echo "Exiting...<br>";
            break;
        default:
            echo "Invalid choice. Please enter a valid option.<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Associative Array Operations</title>
</head>
<body>
    <form method="post" action="p12.php">
        <label>1. Display elements with keys</label><br>
        <label>2. Display array size</label><br>
        <label>3. Delete element by index</label><br>
        <label>4. Reverse key-value pairs</label><br>
        <label>5. Traverse array in random order</label><br>
        <label>6. Exit</label><br>
        <input type="text" name="choice" placeholder="Enter choice">
        <input type="submit" value="Submit">
    </form>
    <form method="post" action="p12.php">
        <label>Index to delete (for choice 3):</label>
        <input type="text" name="index" placeholder="Enter index">
        <input type="submit" value="Delete">
    </form>
</body>
</html>
