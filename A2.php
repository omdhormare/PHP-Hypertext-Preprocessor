<html>
<body bgcolor="orange">
<form method="post" action="A2.php">
Enter 1 number :
<input type="text" name="t1"><br>
<br>
Enter 2 Number:
<input type="text" name="t2"><br>
<br>
<input type="submit" value="  calculate  "><br>
</html>

<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$a+$b;
echo("<br><br> Addtion :".$c);

?>