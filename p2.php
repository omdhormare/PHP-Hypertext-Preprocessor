<html>
<form method="POST" Action="p2.php">
Enter No 1:
<Input type="text" name="t1"><br>
Enter No 2:
<Input type="text" name="t2"><br>
<input type="Submit" value="Check">
<?PHP
$a=$_POST["t1"];
$b=$_POST["t2"];
$a>$b ? $m=$a:$m=$b;

echo("max no=".$m);
?>