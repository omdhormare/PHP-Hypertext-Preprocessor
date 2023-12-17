<?php
function reverseString($str, $pos)
{
    $len = strlen($str);
    if ($pos >= $len || $pos < 0) {
        return $str; // Return the original string if position is invalid
    }

    $start = substr($str, 0, $pos);
    $end = substr($str, $pos);
    return $start . strrev($end);
}

// Initialize variables to store user input and results
$string1 = "";
$string2 = "";
$comparisonResult = "";
$concatenatedString = "";
$position = 0;
$reversedString = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string1 = $_POST["string1"];
    $string2 = $_POST["string2"];

    // Compare strings using ==
    if ($string1 == $string2) {
        $comparisonResult = "Strings are equal using == operator.";
    } else {
        $comparisonResult = "Strings are not equal using == operator.";
    }

    // Compare strings using strcmp function
    $strcmpResult = strcmp($string1, $string2);
    if ($strcmpResult == 0) {
        $comparisonResult .= " Strings are equal using strcmp function.";
    } else {
        $comparisonResult .= " Strings are not equal using strcmp function.";
    }

    // Concatenate the second string to the first string
    $concatenatedString = $string1 . $string2;

    // Get the position from the user
    if (isset($_POST["position"]) && is_numeric($_POST["position"])) {
        $position = (int)$_POST["position"];
    }

    // Reverse the characters from the first string at the specified position
    $reversedString = reverseString($string1, $position);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>String Operations</title>
</head>

<body>
    <h2>String Operations</h2>
    <form method="post" action="">
        <label for="string1">Enter the first string:</label>
        <input type="text" name="string1" id="string1" value="<?php echo $string1; ?>" required><br>

        <label for="string2">Enter the second string:</label>
        <input type="text" name="string2" id="string2" value="<?php echo $string2; ?>" required><br>

        <input type="radio" name="position" value="0" <?php echo ($position === 0) ? 'checked' : ''; ?>> Position 0<br>
        <input type="radio" name="position" value="1" <?php echo ($position === 1) ? 'checked' : ''; ?>> Position 1<br>
        <input type="radio" name="position" value="2" <?php echo ($position === 2) ? 'checked' : ''; ?>> Position 2<br>
        <!-- Add more radio buttons for additional positions if needed -->

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Comparison Results:</h3>";
        echo "<p>$comparisonResult</p>";

        echo "<h3>Concatenated String:</h3>";
        echo "<p>$concatenatedString</p>";

        echo "<h3>Reversed String:</h3>";
        echo "<p>$reversedString</p>";
    }
    ?>
</body>

</html>
