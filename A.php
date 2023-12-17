<html>
<body>
<form method="POST" Action="sleep No 3.php">
Enter No 1:
<input type="text" name="t1"><br>
Enter No 2:
<input type="text" name="t2"><br>
<input type="radio" name="r1" value="a">Addtion<br>
<input type="radio" name="r1" value="b">Substrction<br>
<input type="radio" name="r1" value="c">Multipliction<br>
<input type="radio" name="r1" value="d">Division<br>
<input type="button" value="Calculate"><br>
</html>
</form>
<body>
<?php
 if ($_SERVER["REQUEST_METHOD"] === "POST")
{
$a=$_POST["t1"];
$b=$_POST["t2"];
$ch=$_POST["r1"];
if($ch=="a")
Addtion($a,$b);
if($ch=="b")
Substrction($a,$b);
if($ch=="c")
Multipliction($a,$b);
if($ch=="d")
Division($a,$b);
function Addtion($a,$b);
{
$c=$a+$b;
echo("Adttion : ".$c);
}
function Substrction($a,$b);
{
$c=$a-$b;
echo("Substrction : ".$c);
}
function Multipliction($a,$b);
{
$c=$a*$b;
echo("Multipliction : ".$c);
}
function Division($a,$b);
{
$c=$a/$b;
echo("Division : ".$c);
}
}
?>