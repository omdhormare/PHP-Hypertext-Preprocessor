<html>
<form method="post" action="Reverce.php">
Enter No:
<input type="text" name="t1"><br>
<input type="submit" value="Return">
</form>

<?php 
  $n = $_POST["t1"];
  $n1 = $n;
  $s = 0;

  while ($n > 0)
 {
    $d = $n % 10;
    $s = $s * 10 + $d;
    $n = (int)($n / 10);
  }

  echo("Reverse No: " . $s);

?>
</html>
