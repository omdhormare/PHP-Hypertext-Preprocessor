<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
</head>
<body>
<form action="p13.php" method="post">
    <h3>OPERATIONS</h3>
    <input type="radio" name="a" value="1">Display.<br><br>
    <input type="radio" name="a" value="2">Size.<br><br>
    <input type="radio" name="a" value="3">Delete.<br><br>
    <input type="radio" name="a" value="4">Reverse.<br><br>
    <input type="radio" name="a" value="5">Traverse.<br><br>
    <input type="submit" value="OK">
    <input type="reset" value="Cancel"><br>
</form>

<?php
$a = array("Roll No" => 1, "Name" => 'Om', "per" => 86, "Class" => 'Sy');
$ch = $_POST['a'];

switch ($ch) {
    case '1':
        foreach ($a AS $key => $value) {
            echo ("<br>key :  $key ");
            echo("<br> val :  $value");
        }
        break;

    case '2':
        echo count($a);
        break;

    case '3':
        $a = array_reverse($a);
        print_r($a);
        break;

    case 4 :
                print_r(array_flip($a));
                break;

    case '5':
        shuffle($a);
        print_r($a);
        break;
}
?>
</body>
</html>
