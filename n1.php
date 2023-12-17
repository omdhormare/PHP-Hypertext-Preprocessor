<html>
<head>
</head>
<body>
<form method="post" action="n1.php">
<br>
Enter A Day Of Week:<br>
<br>
    <input type="text" name="t1"> <br>
<br>
    <input type="submit" value="OK"> <input type="reset" value="clear">
</form>

<?php
IF($_SERVER ["REQUEST_METHOD"]==="POST")               
{
$d = $_POST["t1"];
switch ($d) 
{
    case "monday":
        echo("<body style='background-color: red;'>");
        break;
    case "tuesday":
        echo("<body style='background-color: green;'>");
        break;
    case "wednesday":
        echo("<body style='background-color: blue;'>");
        break;
    case "thursday":
        echo("<body style='background-color: yellow;'>");
        break;
    case "friday":
        echo("<body style='background-color: orange;'>");
        break;
    case "saturday":
        echo("<body style='background-color: purple;'>");
        break;
    case "sunday":
        echo("<body style='background-color: pink;'>");
        break;
    default:
        echo("<body>");
        echo("<h1>Invalid day.......</h1>");
}
}
?>
</body>
</html>
