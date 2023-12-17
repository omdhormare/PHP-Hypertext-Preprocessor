1).
<html>
<form method="POST" Action="Practice Program.php">
Enter No 1:
<input type="text" name="t1"><br>
Enter No 2:
<input type="text" name="t2"><br>
<input type="submit" value="calculate"><br>
</form>

<?PHP
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$a+$b;
$d=$a-$b;
$e=$a*$b;
$f=$a/$b;
echo("Addtion=".$c);
echo("Substraction=".$d);
echo("Multiplication=".$e);
echo("Divison=".$f);
?>


2).
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

3)
<?PHP
$a=5;
echo("<br> value1=".$a++);
echo("<br> value2=".$a);
$b=5;
echo("<br> value3=".++$a);
echo("<br> value4=".$b);
?>



3. Write a PHP Script to display the total and percentage of Marks of Subjects (Out of 100) 
     Data Structure, Digital Marketing, PHP, SE, and Bigdata.
<html>
<form method="POST" Action="p4.php">
Data Structure:
<input type="text" name="t1"><br>

Digital marketing
<input type="text" name="t2"><br>

PHP
<input type="text" name="t3"><br>

SE:
<input type="text" name="t4"><br>

BIG DATA:
<input type="text" name="t5"><br>
<input type="submit" value="Calculate"><br>

<?PHP
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["t4"];
$e=$_POST["t5"];

$t=$a+$b+$c+$d+$e;
$p=$t/5;
echo("<br> Total mark=".$t);
echo("<br> per=".$p);
?>