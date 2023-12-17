<html>
<form method="POST" action="n.php">
Enter 1 Number:
<input type="text" name="n1"><br>
Enter 2 Number:
<input type="text" name="n2"><br>
<input type="submit" value=" calculate "><br>
<html>
<form>
<?php
$a=$_POST["n1"];
$b=$_POST["n2"];
$c=$a+$b;
echo("<br> Addtion : ".$c); 
?>