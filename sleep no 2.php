<html>
<body bgcolor="red">
    <form method="POST" action="sleep no 2.php">
        Enter Large string:
        <input type="text" name="t1"><br><br>
        Enter Small string:
        <input type="text" name="t2"><br><br>
        <input type="radio" name="r1" value="1">Replace String <br><br>
        <input type="submit">        
        <input type="Reset">
    </form>
</body>
</html>

<?php
$s1 = isset($_POST["t1"]) ? $_POST["t1"] : '';
$s2 = isset($_POST["t2"]) ? $_POST["t2"] : '';
$ch = isset($_POST["r1"]) ? $_POST["r1"] : '';

switch ($ch) {
    case "1":
        replace_string($s1, $s2);
        break;
}

function replace_string($s1, $s2)
{
    $s = str_replace($s2, $s1, $s1);
    echo "<br>Replaced string: " . $s;
}

function find_first_occurrence($largeStr, $smallStr)
{
    $pos = strpos($largeStr, $smallStr);
    if ($pos !== false) {
        echo "<br>First occurrence of small string: " . $pos;
    } else {
        echo "<br>Small string not found in the large string.";
    }
}

function find_last_occurrence($largeStr, $smallStr)
{
    $pos = strrpos($largeStr, $smallStr);
    if ($pos !== false) {
        echo "<br>Last occurrence of small string: " . $pos;
    } else {
        echo "<br>Small string not found in the large string.";
    }
}

function count_occurrences($largeStr, $smallStr)
{
    $count = substr_count($largeStr, $smallStr);
    echo "<br>Total occurrences of small string: " . $count;
}

// Call the functions here as needed.
find_first_occurrence($s1, $s2);
find_last_occurrence($s1, $s2);
count_occurrences($s1, $s2);
?>
