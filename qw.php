<html>
<body>
<form method="post" action="qw.php">
<input type="radio" name="t1" value="1">addition<br>
<input type="radio" name="t1" value="2">sub<br>
<input type="radio" name="t1" value="3">mult<br>
<input type="radio" name="t1" value="4">divi<br>
<input type="submit" value="ok">
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$ch=$_POST["t1"];
switch($ch)
{
case 1: add($s1=90,$s2=90);
break;
case 2:subb($s1=98,$s2=87);
break;
case 3:mul($s1=90,$s2=76);
break;
case 4:divi($s1=81,$s2=76);
break;
}
}
function add($s1,$s2)
{
$c=$s1+$s2;
echo("add=".$c);
}
function subb($s1,$s2)
{
$z=$s1-$s2;
echo("sub=".$z);
}
function mul($s1,$s2)
{
$e=$s1*$s2;
echo("mul=".$e);
}
function divi($s1,$s2)
{
$f=$s1/$s2;
echo("divi=".$f);
}
?>