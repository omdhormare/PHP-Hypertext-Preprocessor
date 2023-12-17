<html>
<form method="POST" action="Add123.php">
Enter 1 No :
<input type="text" name="t1"><br>
<br>
Enter 2 No :
<input type="text" name="t2"><br>
<br>
<input type="submit" value=" Calculate ">
</html>
</form>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$a+$b;
echo("<br> Addtion : ".$c);
?>

