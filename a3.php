<html>
<form method="POST" action="a3.php">
Enter 1 Number:
<input type="text" name="n1"><br>

<input type="submit" value=" calculate "><br>
</html>
</form>
<?php
$a=$_POST["n1"];
if($a%2==0)
echo("<br> Even No :");
else
echo("<br> Odd No :");
?>