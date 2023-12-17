<html>
<head>
    <title>Array Manipulation</title>
</head>
<body>
    <h2>Array Manipulation</h2>
    <form method="post" action="e1.php">
            <input type="radio" name="t1" value="1">Display array along with keys<br><br>
            <input type="radio" name="t1" value="2">Display the size of the array<br><br>
            <input type="radio" name="t1" value="3">Delete an element from the array<br><br>
            <input type="radio" name="t1" value="4">Shuffle the array<br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
$a = array("RNO" =>"101", "NAME" =>"SAMRUDDHI", "CGPA" => "9.19");
  $ch= $_POST['t1'];
{
    switch ($ch) 
 {
        case 1:
            echo("Display array along with keys: ");
            print_r($a);
            break;
        case 2:
            echo("Size of the array: ".count($a));
            break;
        case 3:
            unset($a["RNO"]);
            echo("Display array after deleting : ");
            print_r($a);
            break;
        case 4:
            shuffle($a);
            echo("Shuffled array: ");
            print_r($a);
            break;
}
}
?>
