<html>
<form method="POST" action="vowel.php">
Enter string:
<input type="text" name="t1"><br>
<input type="submit" value="Count">
</form>
<?php
  $s1 = $_POST["t1"];
  $cnt = 0;
  for ($i = 0; $i < strlen($s1); $i++) {
    if (
      $s1[$i] == "A" || $s1[$i] == "a" ||
      $s1[$i] == "E" || $s1[$i] == "e" ||
      $s1[$i] == "I" || $s1[$i] == "i" ||
      $s1[$i] == "O" || $s1[$i] == "o" ||
      $s1[$i] == "U" || $s1[$i] == "u" )
 {
      $cnt++;
    }
  
  echo("vowel count: " . $cnt);
}
?>
