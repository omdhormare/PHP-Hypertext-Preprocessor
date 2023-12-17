<html>
<form method="post" action="m.php">
  Enter No:
  <input type="text" name="t1"><br>
  Enter No:
  <input type="text" name="t2"><br>
  <input type="submit" value="calculate">
</form>

<?php 
$a = $_POST["t1"];
$b = $_POST["t2"];
$c = $a + $b;
echo("Addition = ".$c);
?>
</html>
