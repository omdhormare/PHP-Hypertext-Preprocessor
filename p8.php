<html>
<form method="POST" action="p8.php">
Enter No:
<input type="text" name="t1"><br>
<input type="submit" value="Count">
</form>
</html>
<?php
$n=$_POST["t1"];
$sum=0;
while((int) $n>0)
{
$d=$n%10;
$sum=$sum+$d;
$n=$n/10;
}
echo("sum of Digit=".$sum);

?>