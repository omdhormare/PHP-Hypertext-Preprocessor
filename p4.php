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