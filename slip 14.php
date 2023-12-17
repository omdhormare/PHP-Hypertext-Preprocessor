<html>
    <body>
        <form action="slip 14.php" method="POST">
            Enter Email Id :<br><br>
            <input type="text" name="t1"><br><br>
            <input type="Submit" value="check">
            <input type="Reset">
        </form>
    </body>
</html>
<?php
error_reporting(0);
$s1 = $_POST["t1"];
echo("Email id: " . $s1);
if (filter_var($s1, FILTER_VALIDATE_EMAIL)) 
{
    echo("<br>Valid Email");
} else {
    echo("<br>Invalid Email");
}
?>
