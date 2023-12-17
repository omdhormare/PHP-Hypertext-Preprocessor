<html>
<form method="POST" action="postion.php">
Enter String:
<input type="text" name="t1"><br>
String count:
<input type="text" name="t2"><br>
<input type="submit" value="Count">
</form>
<?php 
  $s1 = $_POST["t1"];
  $ch = $_POST["t2"];
  $cnt = 0;
  for ($i = 0; $i < strlen($s1); $i++)
 {
    if ($s1[$i] === $ch) 
{
      $cnt++;
    }
  echo("ch count: " . $cnt);
}
?>
</html>
