<html>
<form method="post" action="Star.php">
Enter No:
<input type="text" name="t1"><br>
<input type="submit" value="Print Star">
</form>

<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $n = $_POST["t1"];
  for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo("*");
    }
    echo("<br>");
  }
}
?>
</html>
